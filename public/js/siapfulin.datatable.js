jQuery('.js-dataTable').dataTable({
    pagingType: "full_numbers",
    pageLength: 10,
    sWrapper: "dataTables_wrapper dt-bootstrap4",
    sFilterInput: "form-control form-control-sm",
    sLengthSelect: "form-control form-control-sm",
    dom: '<"top"<"row dt-margin"<"col-md-6"<"toolbar"B>><"col-md-6"f>>>rt<"bottom"><"row dt-margin"<"col-md-6"i><"col-md-6"p>><"clear">',
    language: {
        lengthMenu: "_MENU_",
        search: "_INPUT_",
        searchPlaceholder: "Search..",
        info: "Page <strong>_PAGE_</strong> of <strong>_PAGES_</strong>",
        paginate: {
            first: '<i class="fa fa-angle-double-left"></i>',
            previous: '<i class="fa fa-angle-left"></i>',
            next: '<i class="fa fa-angle-right"></i>',
            last: '<i class="fa fa-angle-double-right"></i>'
        }
    },
    order: [],
    columnDefs: [ {
      targets  : 'no-sort',
      orderable: false,
    }]
});