Highcharts.chart('chart-container', {
    title: {
        text: 'Grafik Penjualan'
    },
    xAxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Ags', 'Sep', 'Okt', 'Nov', 'Des']
    },
    yAxis: {
        title: {
            text: 'Jumlah'
        }
    },
    series: [{
        name: 'Penjualan',
        data: [100, 200, 300, 400, 500, 600, 700, 800, 900, 1000, 1100, 1200]
    }]
});
