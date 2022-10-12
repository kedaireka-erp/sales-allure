import helper from "./helper";
import colors from "./colors";
import Chart from "chart.js/auto";

(function(){
    "use strict";

   if($('#report-app-chart').length){
       let ctx = $("#report-app-chart")[0].getContext("2d");
       let myPieChart = new Chart(ctx, {
           type: "pie",
           data: {
               labels: [
                   "Lost",
                   "Pending",
                   "Deals",
               ],
               datasets: [
                   {
                       data: [30, 45, 25],
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

})();