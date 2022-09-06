import xlsx from "xlsx";
import { createIcons, icons } from "lucide";
import Tabulator from "tabulator-tables";
import { WindowScrollController } from "@fullcalendar/core";

(function () {
    "use strict";

    // Tabulator
    if ($("#tabulator-fppp").length) {
        // Setup Tabulator
        let table = new Tabulator("#tabulator-fppp", {
            ajaxURL: "http://127.0.0.1:8000/fppps/getData",
            ajaxFiltering: true,
            ajaxSorting: true,
            printAsHtml: true,
            printStyled: true,
            pagination: "local",
            paginationSize: 10,
            paginationSizeSelector: [10, 20, 30, 40],
            layout: "fitColumns",
            responsiveLayout: "collapse",
            placeholder: "No matching records found",
            columns: [
                {
                    formatter: "responsiveCollapse",
                    width: 40,
                    minWidth: 30,
                    hozAlign: "center",
                    resizable: false,
                    headerSort: false,
                },

                // For HTML table
                {
                    title: "NOMOR FPPP",
                    minWidth: 200,
                    responsive: 0,
                    field: "fppp_no",
                    vertAlign: "middle",
                    print: false,
                    download: false,
                    formatter(cell, formatterParams) {
                        return `<div>
                            <div class="font-medium whitespace-nowrap">021/FPPP/AST/09/2022</div>
                        </div>`;
                    },
                },
                {
                    title: "TIPE FPPP",
                    minWidth: 200,
                    responsive: 0,
                    field: "name",
                    vertAlign: "middle",
                    hozAlign: "center",
                    print: false,
                    download: false,
                    formatter(cell, formatterParams) {
                        return `<div>
                            <div class="font-medium whitespace-nowrap">${cell.getData().fppp_type
                            }</div>
                        </div>`;
                    },
                },
                {
                    title: "TAHAP PRODUKSI",
                    minWidth: 200,
                    responsive: 0,
                    field: "name",
                    vertAlign: "middle",
                    hozAlign: "center",
                    print: false,
                    download: false,
                    formatter(cell, formatterParams) {
                        return `<div>
                            <div class="font-medium  whitespace-nowrap">${cell.getData().production_phase
                            }</div>
                        </div>`;
                    },
                },
                {
                    title: "NOMOR QUOTATION",
                    minWidth: 200,
                    responsive: 0,
                    field: "name",
                    vertAlign: "middle",
                    print: false,
                    download: false,
                    formatter(cell, formatterParams) {
                        return `<div>
                            <div class="font-medium whitespace-nowrap">259/ASTRAL/AP084/01/2022/R4</div>
                        </div>`;
                    },
                },

                {
                    title: "ACTIONS",
                    minWidth: 200,
                    field: "actions",
                    responsive: 1,
                    hozAlign: "center",
                    vertAlign: "middle",
                    print: false,
                    download: false,
                    formatter(cell, formatterParams) {
                        let link = cell.getData().id;
                        console.log(link);
                        let a = $(
                            `<div class="flex lg:justify-center items-center">
                            <a class="detail flex items-center text-primary mr-3" href="javascript:;">
                                <i data-lucide = "eye" class = "w-4 h-4 mr-1"></i> Detail
                            </a>
                            <a class="edit flex items-center mr-3" href="{!! 'google.com' !!}">
                                <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit
                            </a>
                                <button id = "fppp${link}" type = "submit" class="delete flex items-center text-danger mr-3">
                                    <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete
                                </button>
                        </div>`);

                        // $(a)
                        //     .find(".edit {{$id}}")
                        //     .on("click", function (event) {
                        //         // alert("EDIT");
                        //         event.preventDefault();

                        //         let title = $("input[name=title{{$id}}]").val();
                        //         let _token = $('meta[name="csrf-token"]').attr('content');

                        //         $.ajax({
                        //             url: "{{route("fppps.edit", $fppp->id)}}",
                        //             type: "POST",
                        //             data: {
                        //                 title: title,
                        //                 _token: _token,
                        //             },

                        //             success: function (response) {
                        //                 console.log(response);
                        //                 window.location.reload();
                        //             },

                        //             error: function (error) {
                        //                 console.log(error)
                        //             }

                        //         });




                        //     });

                        $(`#fppp${link}`)
                            .on("click", function (event) {
                                console.log("delete")
                                event.preventDefault();

                                $.ajax({
                                    url: "/api/fppps/destroy/{$fppp->id}",
                                    type: "POST",

                                    success: function (response) {
                                        console.log(response);
                                        window.location.reload();
                                    },

                                    error: function (error) {
                                        console.log(error)
                                    }

                                });

                            });

                        return a[0];

                    },
                },

                // For print format
                {
                    title: "NOMOR FPPP",
                    field: "fppp_no",
                    visible: false,
                    print: true,
                    download: true,
                },
                {
                    title: "TIPE FPPP",
                    field: "fppp_type",
                    visible: false,
                    print: true,
                    download: true,
                },
                {
                    title: "TAHAP PRODUKSI",
                    field: "production_phase",
                    visible: false,
                    print: true,
                    download: true,
                },
                {
                    title: "NOMOR QUOTATION",
                    field: "fppp_no",
                    visible: false,
                    print: true,
                    download: true,
                },

            ],
            renderComplete() {
                createIcons({
                    icons,
                    "stroke-width": 1.5,
                    nameAttr: "data-lucide",
                });
            },
        });

        // Redraw table onresize
        window.addEventListener("resize", () => {
            table.redraw();
            createIcons({
                icons,
                "stroke-width": 1.5,
                nameAttr: "data-lucide",
            });
        });

        // Filter function
        function filterHTMLForm() {
            let field = $("#tabulator-html-filter-field").val();
            let type = $("#tabulator-html-filter-type").val();
            let value = $("#tabulator-html-filter-value").val();
            table.setFilter(field, type, value);
        }

        // On submit filter form
        $("#tabulator-html-filter-form")[0].addEventListener(
            "keypress",
            function (event) {
                let keycode = event.keyCode ? event.keyCode : event.which;
                if (keycode == "13") {
                    event.preventDefault();
                    filterHTMLForm();
                }
            }
        );

        // On click go button
        $("#tabulator-html-filter-go").on("click", function (event) {
            filterHTMLForm();
        });

        // On reset filter form
        $("#tabulator-html-filter-reset").on("click", function (event) {
            $("#tabulator-html-filter-field").val("name");
            $("#tabulator-html-filter-type").val("like");
            $("#tabulator-html-filter-value").val("");
            filterHTMLForm();
        });

        // Export
        $("#tabulator-fppp-export-csv").on("click", function (event) {
            table.download("csv", "data.csv");
        });

        $("#tabulator-export-json").on("click", function (event) {
            table.download("json", "data.json");
        });

        $("#tabulator-fppp-export-xlsx").on("click", function (event) {
            window.XLSX = xlsx;
            table.download("xlsx", "data.xlsx", {
                sheetName: "Products",
            });
        });

        $("#tabulator-export-html").on("click", function (event) {
            table.download("html", "data.html", {
                style: true,
            });
        });

        // Print
        $("#tabulator-fppp-print").on("click", function (event) {
            table.print();
        });
    }
})();
