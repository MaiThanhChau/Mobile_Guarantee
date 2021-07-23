"use strict";

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

// DataTables Demo
// =============================================================
var DataTablesDemo =
/*#__PURE__*/
function () {
  function DataTablesDemo( table_obj ) {
    _classCallCheck(this, DataTablesDemo);

    this.init( table_obj );
  }

  _createClass(DataTablesDemo, [{
    key: "init",
    value: function init( table_obj ) {

      console.log( table_obj );

      // event handlers
      this.table = this.table( table_obj );
      this.searchRecords();
      this.selecter();
      this.clearSelected();
      //this.table2(); // add buttons

      //this.table.buttons().container().appendTo('#dt-buttons').unwrap();
    }
  }, {
    key: "table",
    value: function table( table_obj ) {
      return table_obj.DataTable({
        dom: "<'text-muted'Bi>\n        <'table-responsive'tr>\n        <'mt-1'p>",
        buttons: ['copyHtml5', {
          extend: 'print',
          autoPrint: false
        }],
        language: {
          paginate: {
            previous: '<i class="fa fa-lg fa-angle-left"></i>',
            next: '<i class="fa fa-lg fa-angle-right"></i>'
          }
        },
        pageLength: 5,
        autoWidth: false,
        processing: true,
        serverSide: true,
        serverMethod: 'post',
        ajax: {
            data : {
              warehouse_id : warehouse_id,
              show_inventory : show_inventory,
              layout : 'pos',
            },
            url: root_url + 'ajax/ajaxGetProducts',
            type: 'POST',
            headers : {
              "X-CSRF-Token" : csrfToken
            }
        },
        //ajax: root_url + 'ajax/ajaxGetProducts',
        deferRender: true,
        order: [1, 'desc'],
        columns: [
        {
          data: 'id',
          className: 'col-checker align-middle',
          orderable: false,
          searchable: false
        }, {
          data: 'name',
          className: 'align-middle f-name col-label'
        }, {
          data: 'sku',
          className: 'align-middle f-sku col-label'
        }
        ],
        columnDefs: [{
          targets: 0,
          render: function render(data, type, row, meta) {
            return "<div class=\"custom-control custom-control-nolabel custom-checkbox\">\n            <input type=\"checkbox\" class=\"custom-control-input\" name=\"selectedRow[]\" id=\"p".concat(row.id, "\" value=\"").concat(row.id, "\">\n            <label class=\"custom-control-label\" for=\"p").concat(row.id, "\"></label>\n          </div>");
          }
        }]
      });
    }
  }, {
    key: "searchRecords",
    value: function searchRecords() {
      var self = this;

      $('#do-search').on('click', function (e) {
        var filterBy = $('#filterBy').val();
        var hasFilter = filterBy !== '';
        var value = $('#table-search').val();

        if (value.length && (e.type === 'keyup' || e.type === 'change')) {
          self.clearSelectedRows();
        }
        self.table.search('').columns().search('').draw();
        if (hasFilter) {
          self.table.columns(filterBy).search(value).draw();
        } else {
        //   self.table.search(value).draw();
        }
      });
    }
  }, {
    key: "getSelectedInfo",
    value: function getSelectedInfo() {
      var $selectedRow = $('input[name="selectedRow[]"]:checked').length;
      var $info = $('.thead-btn');
      var $badge = $('<span/>').addClass('selected-row-info text-muted pl-1').text("".concat($selectedRow, " kết quả được chọn")); // remove existing info

      $('.selected-row-info').remove(); // add current info

      if ($selectedRow) {
        $info.prepend($badge);
      }
    }
  }, {
    key: "selecter",
    value: function selecter() {
      var self = this;
      $(document).on('change', '#check-handle', function () {
        var isChecked = $(this).prop('checked');
        $('input[name="selectedRow[]"]').prop('checked', isChecked); // get info

        self.getSelectedInfo();
      }).on('change', 'input[name="selectedRow[]"]', function () {
        var $selectors = $('input[name="selectedRow[]"]');
        var $selectedRow = $('input[name="selectedRow[]"]:checked').length;
        var prop = $selectedRow === $selectors.length ? 'checked' : 'indeterminate'; // reset props

        $('#check-handle').prop('indeterminate', false).prop('checked', false);

        if ($selectedRow) {
          $('#check-handle').prop(prop, true);
        } // get info


        self.getSelectedInfo();
      });
    }
  }, {
    key: "clearSelected",
    value: function clearSelected() {
      var self = this; // clear selected rows

      $('#myTable').on('page.dt', function () {
        self.clearSelectedRows();
      });
      $('#clear-search').on('click', function () {
        self.clearSelectedRows();
      });
    }
  }, {
    key: "clearSelectedRows",
    value: function clearSelectedRows() {
      $('#check-handle').prop('indeterminate', false).prop('checked', false).trigger('change');
    }
  }]);

  return DataTablesDemo;
}();
/**
 * Keep in mind that your scripts may not always be executed after the theme is completely ready,
 * you might need to observe the `theme:load` event to make sure your scripts are executed after the theme is ready.
 */

jQuery( document ).ready( function(){
    jQuery('body').on('click','.col-label',function(){
      var checkbox_table = jQuery(this).closest('tr').find('.col-checker .custom-control-input');
      if( checkbox_table.is(':checked') ){
        checkbox_table.prop('checked',false);
      }else{
        checkbox_table.prop('checked',true);
      }
      
    });
});
