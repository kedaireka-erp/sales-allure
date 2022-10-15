import helper from "./helper";
import colors from "./colors";
import Chart from "chart.js/auto";
import $ from "jquery";

(function(){
    "use strict";

    function renderPieChart(data, labels){
        let ctx = $("#report-app-chart")[0].getContext("2d");
        let myPieChart = new Chart(ctx, {
            type: "pie",
            data: {
                labels: labels,
                datasets: [
                    {
                        data: data,
                        backgroundColor: [
                            colors.danger(0.9),
                            colors.warning(0.9),
                            colors.primary(0.9),
                        ],
                        hoverBackgroundColor: [
                            colors.danger(0.9),
                            colors.warning(0.9),
                            colors.primary(0.9),
                        ],
                        borderWidth: 5,
                        borderColor: $("html").hasClass("dark")
                            ? colors.darkmode[700]()
                            : colors.white,
                    },
                ],
            },
            options: {
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    },
                },
            },
        });
    }

    function getPieChartData(){
        $.ajax({
            url: "http://127.0.0.1:8000/pie-approachment",
            success: function (result) {
                
                renderPieChart(result.data, result.labels);
            },
            error: function (err) {
                console.log(err);
            }
        });
    }

    function renderLineChart(data1, data2, labels){
        let ctx = $("#report-line-chart")[0].getContext("2d");
        let myChart = new Chart(ctx, {
            type: "line",
            data: {
                labels: labels,
                datasets: [
                    {
                        label: "Rp",
                        data: data1,
                        borderWidth: 2,
                        borderColor: colors.primary(0.8),
                        backgroundColor: "transparent",
                        pointBorderColor: "transparent",
                        tension: 0.4,
                    },
                    {
                        label: "Rp",
                        data: data2,
                        borderWidth: 2,
                        borderDash: [2, 2],
                        borderColor: $("html").hasClass("dark")
                            ? colors.slate["400"](0.6)
                            : colors.slate["400"](),
                        backgroundColor: "transparent",
                        pointBorderColor: "transparent",
                        tension: 0.4,
                    },
                ],
            },
            options: {
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    },
                },
                scales: {
                    x: {
                        ticks: {
                            font: {
                                size: 12,
                            },
                            color: colors.slate["500"](0.8),
                        },
                        grid: {
                            display: false,
                            drawBorder: false,
                        },
                    },
                    y: {
                        ticks: {
                            font: {
                                size: 9,
                            },
                            color: colors.slate["500"](0.8),
                            callback: function (value, index, values) {
                                return "Rp" + value;
                            },
                        },
                        grid: {
                            color: $("html").hasClass("dark")
                                ? colors.slate["500"](0.3)
                                : colors.slate["300"](),
                            borderDash: [2, 2],
                            drawBorder: false,
                        },
                    },
                },
            },
        });
    }

    function getLineChartData(){
        $.ajax({
            url: "http://127.0.0.1:8000/line-quotation",
            success: function (result) {
                const labels = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
                renderLineChart(result.this_year, result.last_year, labels);
            },
            error: function (err) {
                console.log(err);
            }
        }); 
    }


   if($('#report-app-chart').length){
        getPieChartData();
   }

    if ($("#report-line-chart").length) {
        getLineChartData();
    }

})();