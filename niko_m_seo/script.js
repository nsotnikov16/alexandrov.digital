
const data1 = {
    labels: [
        'апр. 2021',
        'май 2021',
        'июн. 2021',
        'июл. 2021',
        'авг. 2021',
        ''
    ],
    datasets: [{
        label: 'Показатель',
        data: [130, 100, 110, 120, 330, 380],
        backgroundColor: '#c6dafc',
        borderColor: '#4285f4',
        borderWidth: 2,
        fill: true,
        pointRadius: 4,
        pointBackgroundColor: 'rgba(54, 162, 235, 1)',
        tension: 0.4  // Плавная закругленная линия
    }]
};

const data2 = {
    labels: [
        'апр.2021',
        'май 2021',
        'июн.2021',
        'июл.2021',
        'авг.2021',
        'сен.2021',
        'окт.2021',
        'ноя.2021',
        'дек.2021',
        'янв.2022',
        'фев.2022',
        'мар.2022',
        'апр.2022',
        'май 2022',
        'июн.2022',
        'июл.2022',
        'авг.2022',
        'сен.2022',
    ],
    datasets: [{
        label: 'Показатель',
        data: [140, 100, 130, 146, 340, 380, 380, 420, 440, 400, 460, 470, 460, 456, 470, 475, 480, 485],
        backgroundColor: '#c6dafc',
        borderColor: '#4285f4',
        borderWidth: 2,
        fill: true,
        pointRadius: 4,
        pointBackgroundColor: 'rgba(54, 162, 235, 1)',
        tension: 0.4  // Плавная закругленная линия
    }]
};

document.addEventListener('DOMContentLoaded', () => {
    // Инициализация первой диаграммы
    const chart1 = document.getElementById('chart1');
    handleScrollOnce(chart1, () => {
        new Chart(chart1.getContext('2d'), {
            type: 'line',
            data: data1,
            plugins: [ChartDataLabels],
            options: {
                plugins: {
                    datalabels: {
                        align: 'top',
                        anchor: 'end',
                        color: '#000',
                        font: {
                            weight: 'bold'
                        },
                        formatter: function(value) {
                            return value;
                        }
                    }
                },
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            stepSize: 100,
                            font: {
                                size: 10
                            }
                        },
                    },
                    x: {
                        ticks: {
                            font: {
                                size: 10
                            }
                        }
                    }
                }
            }
        });
    })

    // Инициализация второй диаграммы
    const chart2 = document.getElementById('chart2');
    handleScrollOnce(chart2, () => {
        new Chart(chart2.getContext('2d'), {
            type: 'line',
            data: data2,
            plugins: [ChartDataLabels],
            options: {
                plugins: {
                    datalabels: {
                        align: 'top',
                        anchor: 'end',
                        color: '#000',
                        font: {
                            weight: 'bold'
                        },
                        formatter: function(value) {
                            return value;
                        }
                    }
                },
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            stepSize: 200,
                            font: {
                                size: 10
                            }
                        },
                    },
                    x: {
                        ticks: {
                            font: {
                                size: 10
                            }
                        }
                    }
                }
            }
        });
    })
})
