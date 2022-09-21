import helper from "./helper";
import colors from "./colors";
import Chart from "chart.js/auto";

(function(){
    "use strict";

    let data = [30, 45, 25];

   if($('report-apps-chart').length){
       let ctx = $("#report-apps-chart")[0].getContext("2d");
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

})();