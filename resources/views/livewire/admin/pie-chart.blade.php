<div>
    <script>
        $(function() {
            /*
             * DONUT CHART
             * -----------
             */

            var donutData = [{
                    label: 'RPL',
                    data: {{ $rpl }},
                    color: '#0073b7'
                },
                {
                    label: 'OM',
                    data: {{ $om }},
                    color: '#FFA500'
                },
                {
                    label: 'AK',
                    data: {{ $ak }},
                    color: '#32CD32'
                },
                {
                    label: 'TSM',
                    data: {{ $tsm }},
                    color: '#FF0000'
                }
            ]
            $.plot('#donut-chart', donutData, {
                series: {
                    pie: {
                        show: true,
                        radius: 1,
                        innerRadius: 0.5,
                        label: {
                            show: true,
                            radius: 2 / 3,
                            formatter: labelFormatter,
                            threshold: 0.1
                        }

                    }
                },
                legend: {
                    show: false
                }
            })
            /*
             * END DONUT CHART
             */

        })

        /*
         * Custom Label formatter
         * ----------------------
         */
        function labelFormatter(label, series) {
            return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">' +
                label +
                '<br>' +
                Math.round(series.percent) + '%</div>'
        }
    </script>
</div>
