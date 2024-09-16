<div class="card card-flush h-72  mb-5 mb-xl-10">
    <!--begin::Header-->
    <div class="card-header pt-2">
        <!--begin::Title-->
        <div class="card-title d-flex flex-column">
            <!--begin::Info-->
            <div class="d-flex align-items-center">
                <!--begin::Currency-->
                <span class="fs-4 fw-semibold text-gray-500 me-1 align-self-start"></span>
                <!--end::Currency-->

                <!--begin::Amount-->
                <span class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2 top_total_contact">LEADS</span>
                <!--end::Amount-->
            </div>
            <!--end::Info-->

            <!--begin::Subtitle-->
            <span class="text-gray-500 pt-1 fw-semibold fs-6">Total leads by TAG</span>
            <!--end::Subtitle-->
        </div>
        <!--end::Title-->
    </div>
    <!--end::Header-->

    <!--begin::Card body-->
    <div id="top_contacts_chart" style="min-width: 70px; " data-kt-size="70" data-kt-line="11" class="p-5">

    </div>
    <!--end::Card body-->
</div>
<!--end::Card widget 4-->


<script>
    function topContactsChart(topStats) {
        // Update the total contacts display
        document.querySelector('.top_total_contact').innerHTML = topStats.total_contacts;



        // Define the options for the new chart
        var options = {
            dataLabels: {
                enabled: false,
                formatter: function(val) {
                    return val + "%"
                },

            },
            chart: {
                type: 'donut',
                height: 120, // Keep the height as is to fit within the card
                width: '100%',
                events: {
                    mounted: function(chartContext, config) {
                        // After the chart is rendered, replace the class
                        var legendTexts = document.querySelectorAll('.apexcharts-legend-text');
                        legendTexts.forEach(function(legendText) {
                            legendText.classList.remove('apexcharts-legend-text');
                            legendText.classList.add('text-gray-500', 'flex-grow-1', 'me-4', "fs-6",
                                "gap-4", "d-flex", "align-item-center", "justify-between");
                        });

                    }
                } // Ensure the chart fits within the card's width
            },
            series: [
                topStats.leads,
                topStats.agencies,
                topStats.sollicitants,
                topStats.no_tags,
            ],
            labels: [
                'Leads',
                'Agencies',
                'Sollicitants',
                'No Tags',
            ],
            colors: ["#f8285a", "#1b84ff", "#e4e6ef"],
            plotOptions: {
                pie: {
                    donut: {
                        size: '60%'
                    }
                }
            },
            legend: {
                position: 'right', // Position the legend to the right of the chart
                fontSize: '10px', // Adjust the font size to fit the legend within the small card
                offsetY: 0, // Ensure the legend is vertically centered
                itemMargin: {
                    horizontal: 0,
                    vertical: 4
                },
                formatter: function(seriesName, opts) {
                    return `
                     <div style="font-weight:600">${seriesName}</div>
                     <div class="fw-bolder text-gray-700 text-xxl-end fs-6">${opts.w.globals.series[opts.seriesIndex]}</div>
                    `;
                }
            },
            responsive: [{
                breakpoint: 480,
                options: {
                    chart: {
                        height: 150 // Reduce the height on smaller screens
                    },
                    legend: {
                        position: 'bottom', // Move legend below on smaller screens
                        offsetY: 0,
                        itemMargin: {
                            horizontal: 5,
                            vertical: 5
                        }
                    }
                }
            }]
        };
        if (window.topContactsChartInstance) {
            window.topContactsChartInstance.destroy();
        }
        // Create and render the new chart, storing the instance globally
        window.topContactsChartInstance = new ApexCharts(document.querySelector("#top_contacts_chart"), options);
        window.topContactsChartInstance.render();
    }
</script>

