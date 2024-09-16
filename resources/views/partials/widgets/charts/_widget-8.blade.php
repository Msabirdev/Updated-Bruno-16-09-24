<style>
    .main-div{
        margin-top: -7%;
    }
</style>

<!--begin::Chart widget 8-->
<div class="main-div">
<div class="card card-flush overflow-hidden h-md-70">
    <!--begin::Header-->
    <div class="card-header py-5">
        <!--begin::Title-->
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold text-gray-900">Sales This Months</span>
            <span class="text-gray-500 mt-1 fw-semibold fs-6">All Won Opportunities</span>
        </h3>
        <!--end::Title-->

        <!--begin::Toolbar-->
        <div class="card-toolbar">
            <!--begin::Menu-->
            <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end"
                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                data-kt-menu-overflow="true">

                <i class="ki-duotone ki-dots-square fs-1"><span class="path1"></span><span
                        class="path2"></span><span class="path3"></span><span class="path4"></span></i>
            </button>


            <!--end::Menu-->
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Header-->

    <!--begin::Card body-->
    <div class="card-body d-flex justify-content-between flex-column pb-20 px-0">
        <!--begin::Statistics-->
        <div class="px-9 mb-5">
            <!--begin::Statistics-->
            <div class="d-flex mb-2">
                <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2 top_total_sales"></span>
            </div>
            <!--end::Statistics-->


            <!--end::Description-->
        </div>
        <!--end::Statistics-->

        <!--begin::Chart-->
        <div id="top_sales_chart" class="min-h-auto ps-4 pe-6"
            style="height: 300px; min-height: 315px;">

        </div>
        <!--end::Chart-->
    </div>
    <!--end::Card body-->
</div>
</div>

<!--end::Card-->
<!--end::Chart widget 8-->

<script>
    function topSalesByMonths(saleByMonth) {
        // Update the total sales display
        document.querySelector('.top_total_sales').innerText = saleByMonth.total;

        // Extract dates and counts from the saleByMonth object
        var dates = Object.keys(saleByMonth.won_opportunities).map(dateString => {
            var date = new Date(dateString);
            return date.toLocaleDateString('en-US', {
                month: 'short',
                day: '2-digit'
            });
        });
        var counts = Object.values(saleByMonth.won_opportunities);

        // Destroy the existing chart if it exists
        if (window.topSalesChart) {
            window.topSalesChart.destroy();
        }

        // Define the options for the new chart
        var options = {
            chart: {
                type: 'area',
                height: 350,
                zoom: {
                    enabled: true,
                    type: 'x',
                    autoScaleYaxis: false
                },
                toolbar: {
                    autoSelected: 'zoom',
                    show: false
                },
            },
            series: [{
                name: 'Total Sales',
                data: counts
            }],
            colors: ['#17c653'],
            xaxis: {
                categories: dates,
                tickAmount: 5,
                labels: {
                    formatter: function(value, timestamp) {
                        return value;
                    }
                },

            },
            yaxis: {

                labels: {
                    formatter: function(value) {
                        return `€${value} K`; // Format y-axis labels as $count K
                    }
                }
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                curve: 'smooth',
                width: 3
            },
            markers: {
                size: 0,
                hover: {
                    size: 0
                }
            },
            grid: {
                borderColor: '#e7e7e7',
                strokeDashArray: 5,
                row: {
                    colors: ['transparent', 'transparent'],
                    opacity: 0.5
                }
            },
            tooltip: {
                x: {
                    format: 'yyyy-MM-dd'
                }
            },
            plotOptions: {
                line: {
                    dropShadow: {
                        enabled: true,
                        top: 3,
                        left: 3,
                        blur: 4,
                        opacity: 0.2
                    }
                }
            }
        };

        // Create and render the new chart, storing the instance globally
        window.topSalesChart = new ApexCharts(document.querySelector("#top_sales_chart"), options);
        window.topSalesChart.render();
    }
</script>
