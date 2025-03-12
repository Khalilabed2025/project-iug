$("body").on("click", ".DeleteBtn", function () {
    var url = $(this).attr("data-url");
    var deleteButton = this;

    deleteItem(url, function () {
        $(deleteButton).closest("tr").remove();
    });
});

function deleteItem(url, successCallback) {
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    Swal.fire({
        text: 'تأكيد حذف العنصر؟',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'نعم، احذف!',
        cancelButtonText: 'لا،الغاء',
        customClass: {
            confirmButton: 'btn btn-danger',
            cancelButton: 'btn btn-secondary'
        },
        buttonsStyling: false
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: url,
                type: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': csrfToken
                },
                success: function(response) {
                    Swal.fire({
                        text: 'تم الحذف بنجاح!',
                        icon: 'success',
                        confirmButtonText: 'حسناً!'
                    }).then(function() {
                        if (typeof successCallback === 'function') {
                            successCallback(response);
                        }
                    });
                },
                error: function(xhr, status, error) {
                    Swal.fire({
                        text: 'لم يتم الحذف.',
                        icon: 'error',
                        confirmButtonText: 'حسناً!'
                    });
                }
            });
        }
    });
}

$(".multipleDeleteBtn").on("click", function () {
    const selectedRows = $(".rowCheckbox:checked").closest("tr");
    var type = $(this).attr("data-type");
    var url = $(this).attr("data-url");
    if (selectedRows.length > 0) {

        deleteMultipleItems(selectedRows, url, function () {
            Swal.fire({
                text: 'تم الحذف بنجاح!',
                icon: 'success',
                confirmButtonText: 'حسناً!'
            }).then(function() {
                selectedRows.remove();
                $("#AddBtn"+type).show()
                $(".multipleDeleteBtn").hide()
                $("#multipleTraineeAttend").hide()
            });
        });
    }
});

function deleteMultipleItems(selectedRows, url, successCallback) {
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    Swal.fire({
        text: 'تأكيد حذف العناصر',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'نعم، احذف!',
        cancelButtonText: 'لا،الغاء',
        customClass: {
            confirmButton: 'btn btn-danger',
            cancelButton: 'btn btn-secondary'
        },
        buttonsStyling: false
    }).then((result) => {
        if (result.isConfirmed) {
            selectedRows.each(function() {
                var id = $(this).find(".DeleteBtn").attr("data-id");
                const deleteUrl = url + '/' + id;

                $.ajax({
                    url: deleteUrl,
                    type: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    success: function(response) {
                        if (typeof successCallback === 'function') {
                            successCallback(response);
                        }
                    },
                    error: function(xhr, status, error) {
                        Swal.fire({
                            text: 'لم يتم الحذف.',
                            icon: 'error',
                            confirmButtonText: 'حسناً!'
                        });
                    }
                });
            });
        }
    });
}



$(document).ready(function () {
    $(".multipleDeleteBtn").hide()

// Select All checkbox
$(".selectAll").on("change", function () {
    var type = $(this).attr("data-type");
    var checkboxesToCheck = $(".rowCheckbox[data-type='" + type + "']");
    checkboxesToCheck.prop("checked", this.checked);
    updateButtons(type);
});

// Individual row checkbox
$(".rowCheckbox").on("change", function () {
    var type = $(this).attr("data-type");
    updateButtons(type);
});

// Update buttons based on selected checkboxes
function updateButtons(type) {
    const selectedCount = $(".rowCheckbox[data-type='" + type + "']:checked").length;
    if (selectedCount === 0) {
        $(".selectAll[data-type='" + type + "']").prop("checked", false);
        $("#AddBtn"+type).show()
        $(".multipleDeleteBtn[data-type='" + type + "']").hide()
        $("#multipleTraineeAttend[data-type='" + type + "']").hide()
    } else if (selectedCount === $(".rowCheckbox[data-type='" + type + "']").length) {
        $(".selectAll[data-type='" + type + "']").prop("checked", true);
        $("#AddBtn"+type).hide()
        $(".multipleDeleteBtn[data-type='" + type + "']").show()
        $("#multipleTraineeAttend[data-type='" + type + "']").show()
        $(".multipleDeleteBtn[data-type='" + type + "']").text("حذف الكل").css({
            "background-color": "red", // Remove the background color
            "color": "white" // Remove the text color
         }); 
         $("#multipleTraineeAttend[data-type='" + type + "']").text("تسجيل حضور الكل").css({
            "background-color": "green", // Remove the background color
            "color": "white" // Remove the text color
         });
    } else {
          $("#AddBtn"+type).hide()
        $(".multipleDeleteBtn[data-type='" + type + "']").show()
        $("#multipleTraineeAttend[data-type='" + type + "']").show()
        $(".multipleDeleteBtn[data-type='" + type + "']").text("حذف المحدد").css({
            "background-color": "red", // Remove the background color
            "color": "white" // Remove the text color
         });
         $("#multipleTraineeAttend[data-type='" + type + "']").text("تسجيل حضور المحدد").css({
            "background-color": "green", // Remove the background color
            "color": "white" // Remove the text color
         });
    }
}
});




let currentCol = null;
let ascending = true; // Declare the ascending variable in a broader scope

function initializeSortableTable(tableId) {
    const thElements = document.querySelectorAll(`#${tableId} .sortable`);

    thElements.forEach(th => {
        th.addEventListener('click', () => {
            const col = th.getAttribute('data-col');

            if (currentCol === col) {
                ascending = !ascending;
            } else {
                currentCol = col;
                ascending = true;
            }

            sortTable(tableId, col);
        });
    });
}

function sortTable(tableId, col) {
    const table = document.querySelector(`#${tableId}`);
    const rows = Array.from(table.querySelectorAll('tbody tr'));

    rows.sort((rowA, rowB) => {
        const cellA = rowA.querySelector(`td[data-col="${col}"]`).textContent;
        const cellB = rowB.querySelector(`td[data-col="${col}"]`).textContent;

        if (col === 'date') {
            const dateA = new Date(cellA).getTime();
            const dateB = new Date(cellB).getTime();
            return ascending ? dateA - dateB : dateB - dateA;
        } else {
            return ascending ? cellA.localeCompare(cellB) : cellB.localeCompare(cellA);
        }
    });

    rows.forEach(row => table.querySelector('tbody').appendChild(row));
}

// Initialize sorting for both tables
initializeSortableTable('attendenceTable');




