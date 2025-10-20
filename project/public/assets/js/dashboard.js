$(document).ready(function () {
    var options = {
        exportEnabled: true,
        animationEnabled: true,
        title: {
            text: "Course Sale Previous Six Months",
        },
        subtitles: [
            {
                text: "From: April to October",
            },
        ],
        axisX: {
            title: "Months",
        },
        axisY: {
            title: "Units Sold",
            titleFontColor: "#4F81BC",
            lineColor: "#4F81BC",
            labelFontColor: "#4F81BC",
            tickColor: "#4F81BC",
        },
        axisY2: {
            title: "Profit in USD",
            titleFontColor: "#C0504E",
            lineColor: "#C0504E",
            labelFontColor: "#C0504E",
            tickColor: "#C0504E",
        },
        toolTip: {
            shared: true,
        },
        legend: {
            cursor: "pointer",
            itemclick: toggleDataSeries,
        },
        data: [
            {
                type: "spline",
                name: "Units Sold",
                showInLegend: true,
                xValueFormatString: "MMM YYYY",
                yValueFormatString: "#,##0 Units",
                dataPoints: [
                    {
                        x: new Date(2016, 0, 1),
                        y: 120,
                    },
                    {
                        x: new Date(2016, 1, 1),
                        y: 135,
                    },
                    {
                        x: new Date(2016, 2, 1),
                        y: 144,
                    },
                    {
                        x: new Date(2016, 3, 1),
                        y: 103,
                    },
                    {
                        x: new Date(2016, 4, 1),
                        y: 93,
                    },
                    {
                        x: new Date(2016, 5, 1),
                        y: 129,
                    },
                    {
                        x: new Date(2016, 6, 1),
                        y: 143,
                    },
                    {
                        x: new Date(2016, 7, 1),
                        y: 156,
                    },
                    {
                        x: new Date(2016, 8, 1),
                        y: 122,
                    },
                    {
                        x: new Date(2016, 9, 1),
                        y: 106,
                    },
                    {
                        x: new Date(2016, 10, 1),
                        y: 137,
                    },
                    {
                        x: new Date(2016, 11, 1),
                        y: 142,
                    },
                ],
            },
            {
                type: "spline",
                name: "Profit",
                axisYType: "secondary",
                showInLegend: true,
                xValueFormatString: "MMM YYYY",
                yValueFormatString: "$#,##0.#",
                dataPoints: [
                    {
                        x: new Date(2016, 0, 1),
                        y: 19034.5,
                    },
                    {
                        x: new Date(2016, 1, 1),
                        y: 20015,
                    },
                    {
                        x: new Date(2016, 2, 1),
                        y: 27342,
                    },
                    {
                        x: new Date(2016, 3, 1),
                        y: 20088,
                    },
                    {
                        x: new Date(2016, 4, 1),
                        y: 20234,
                    },
                    {
                        x: new Date(2016, 5, 1),
                        y: 29034,
                    },
                    {
                        x: new Date(2016, 6, 1),
                        y: 30487,
                    },
                    {
                        x: new Date(2016, 7, 1),
                        y: 32523,
                    },
                    {
                        x: new Date(2016, 8, 1),
                        y: 20234,
                    },
                    {
                        x: new Date(2016, 9, 1),
                        y: 27234,
                    },
                    {
                        x: new Date(2016, 10, 1),
                        y: 33548,
                    },
                    {
                        x: new Date(2016, 11, 1),
                        y: 32534,
                    },
                ],
            },
        ],
    };
    var options1 = {
        animationEnabled: true,
        title: {
            text: "Course Wise enrollments",
        },
        data: [
            {
                type: "column",
                legendText: "Last six months data course enrollment wise",
                showInLegend: true,
                dataPoints: [
                    {
                        y: 10,
                    },
                    {
                        y: 6,
                    },
                    {
                        y: 14,
                    },
                    {
                        y: 12,
                    },
                    {
                        y: 19,
                    },
                    {
                        y: 14,
                    },
                    {
                        y: 26,
                    },
                ],
            },
        ],
    };
    $("#coursesales").CanvasJSChart(options);

    $("#Studens_enrolled").CanvasJSChart(options1);

    function toggleDataSeries(e) {
        if (
            typeof e.dataSeries.visible === "undefined" ||
            e.dataSeries.visible
        ) {
            e.dataSeries.visible = false;
        } else {
            e.dataSeries.visible = true;
        }
        e.chart.render();
    }
});
