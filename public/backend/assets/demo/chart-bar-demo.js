// Set new default font family and font color to mimic Bootstrap's default styling
(Chart.defaults.global.defaultFontFamily = "Metropolis"),
'-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = "#858796";

function number_format(number, decimals, dec_point, thousands_sep) {
    // *     example: number_format(1234.56, 2, ',', ' ');
    // *     return: '1 234,56'
    number = (number + "").replace(",", "").replace(" ", "");
    var n = !isFinite(+number) ? 0 : +number,
        prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
        sep = typeof thousands_sep === "undefined" ? "," : thousands_sep,
        dec = typeof dec_point === "undefined" ? "." : dec_point,
        s = "",
        toFixedFix = function(n, prec) {
            var k = Math.pow(10, prec);
            return "" + Math.round(n * k) / k;
        };
    // Fix for IE parseFloat(0.55).toFixed(0) = 0;
    s = (prec ? toFixedFix(n, prec) : "" + Math.round(n)).split(".");
    if (s[0].length > 3) {
        s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
    }
    if ((s[1] || "").length < prec) {
        s[1] = s[1] || "";
        s[1] += new Array(prec - s[1].length + 1).join("0");
    }
    return s.join(dec);
}

// Bar Chart Example
var ctx = document.getElementById("myBarChart");
var myBarChart = new Chart(ctx, {
    type: "bar",
    data: {
        labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni","Juli", "September", "Oktober", "November", "Desember"],
        datasets: [
        {
            label: "Jumlah Permohonan Penelitian",
            backgroundColor: "rgba(0, 97, 242, 1)",
            hoverBackgroundColor: "rgba(0, 97, 242, 0.9)",
            borderColor: "#4e73df",
            data: [4215, 5312, 6251, 7841, 9821, 14984,0,0,0,0,0,0],
            maxBarThickness: 25
        },{
            label: "Jumlah Permohonan Pengambilan Data",
            backgroundColor: "rgba(88, 0, 232, 1)",
            hoverBackgroundColor: "rgba(88, 0, 232, 0.9)",
            borderColor: "#fff",
            data: [1500, 1200, 500, 200, 300, 1345,0,0,0,0,0,0],
            maxBarThickness: 25
        },{
            label: "Jumlah Permohonan Survey Awal/Studi Pendahuluan",
            backgroundColor: "rgba(0, 172, 105, 1)",
            hoverBackgroundColor: "rgba(0, 172, 105, 0.9)",
            borderColor: "#fff",
            data: [1500, 12300, 13500, 20000, 3450000, 134500,0,0,0,0,0,0],
            maxBarThickness: 25
        },{
            label: "Jumlah Permohonan Magang/PKL",
            backgroundColor: "rgba(244, 161, 0, 1)",
            hoverBackgroundColor: "rgba(244, 161, 0, 0.9)",
            borderColor: "#4e73df",
            data: [1500000, 1230000, 13500, 2000000, 3450000, 134500,0,0,0,0,0,0],
            maxBarThickness: 25
        }
    ]
    },
    options: {
        maintainAspectRatio: false,
        layout: {
            padding: {
                left: 10,
                right: 25,
                top: 25,
                bottom: 0
            }
        },
        scales: {
            xAxes: [{
                time: {
                    unit: "month"
                },
                gridLines: {
                    display: false,
                    drawBorder: false
                },
                ticks: {
                    maxTicksLimit: 6
                }
            }],
            yAxes: [{
                ticks: {
                    min: 0,
                    max: 15000,
                    maxTicksLimit: 5,
                    padding: 10,
                    callback: function(value, index, values) {
                        return  value;
                    }
                },
                gridLines: {
                    color: "rgb(234, 236, 244)",
                    zeroLineColor: "rgb(234, 236, 244)",
                    drawBorder: false,
                    borderDash: [2],
                    zeroLineBorderDash: [2]
                }
            }]
        },
        legend: {
            display: false
        },
        tooltips: {
            titleMarginBottom: 10,
            titleFontColor: "#6e707e",
            titleFontSize: 14,
            backgroundColor: "rgb(255,255,255)",
            bodyFontColor: "#858796",
            borderColor: "#dddfeb",
            borderWidth: 1,
            xPadding: 15,
            yPadding: 15,
            displayColors: false,
            caretPadding: 10,
            callbacks: {
                label: function(tooltipItem, chart) {
                    var datasetLabel =
                        chart.datasets[tooltipItem.datasetIndex].label || "";
                    return datasetLabel + ": " + (tooltipItem.yLabel);
                }
            }
        }
    }
});
