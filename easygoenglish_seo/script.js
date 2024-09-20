
const data1 = {
    labels: [
        'Март 22',
        'Апр-22',
        'Май-22',
        'Июн-22',
        'Июл-22',
        'Авг-22',
        'Сен-22',
        'Окт-22',
        'Ноя-22',
        'Дек-22',
        'Янв-23',
        'Фев-23',
        ''
    ],
    datasets: [{
        label: 'Визиты',
        data: [5, 7, 5, 30, 40, 55, 115, 150, 140, 135, 125, 160, 170],
        backgroundColor: 'rgba(248, 172, 149, 0.8)',
        borderColor: '#f25a2c',
        borderWidth: 2,
        fill: true, // Заливка под графиком
        pointRadius: 4, // Размер точек на графике
        pointBackgroundColor: '#f25a2c', // Цвет точек
        tension: 0.4  // Плавная закругленная линия
    }]
};

const data2 = {
    labels: ['Март 2022', 'Апрель 2022', 'Май 2022', 'Июнь 2022', 'Июль 2022', 'Август 2022', ''],
    datasets: [{
        label: 'Показатель',
        data: [5, 7, 4, 28, 40, 55, 115],
        backgroundColor: '#c6dafc',
        borderColor: '#4285f4',
        borderWidth: 2,
        fill: true,
        pointRadius: 0,
        pointBackgroundColor: 'rgba(54, 162, 235, 1)',
        tension: 0.4  // Плавная закругленная линия
    }]
};

const data3 = {
    labels: [
        'Март 2022',
        'Апрель 2022',
        'Май 2022',
        'Июнь 2022',
        'Июль 2022',
        'Август 2022',
        'Сентябрь 2022',
        'Октябрь 2022',
        'Ноябрь 2022',
        'Декабрь 2022',
        'Январь 2022',
        'Февраль 2022',
        'Март 2023',
    ],
    datasets: [{
        label: 'Показатель',
        data: [5, 6, 4, 30, 40, 50, 80, 135, 148, 140, 135, 150, 165],
        backgroundColor: '#c6dafc',
        borderColor: '#4285f4',
        borderWidth: 2,
        fill: true,
        pointRadius: 0,
        pointBackgroundColor: 'rgba(54, 162, 235, 1)',
        tension: 0.4  // Плавная закругленная линия
    }]
}

document.addEventListener('DOMContentLoaded', () => {
    // Инициализация первой диаграммы
    const chart1 = document.getElementById('chart1');
    handleScrollOnce(chart1, () => {
        new Chart(chart1.getContext('2d'), {
            type: 'line',
            data: data1,
            options: {
                maintainAspectRatio: false, 
                scales: {
                    y: {
                        ticks: {
                            stepSize: 50, // Кратность оси Y — шаг 50,
                            font: {
                                size: 10
                            }
                        },
                        title: {
                            display: true, // Отображение подписи оси X
                            text: 'Визиты', // Текст для оси X
                            font: {
                                size: 10 // Размер шрифта подписи оси X
                            }
                        }
                    },
                    x: {
                        title: {
                            display: true, // Отображение подписи оси X
                            text: 'Интервалы дат', // Текст для оси X
                            font: {
                                size: 10 // Размер шрифта подписи оси X
                            }
                        },
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
            options: {
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            stepSize: 25,
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

    // Инициализация третьей диаграммы
    const chart3 = document.getElementById('chart3');
    handleScrollOnce(chart3, () => {
        new Chart(chart3.getContext('2d'), {
            type: 'line',
            data: data3,
            options: {
                maintainAspectRatio: false, 
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            stepSize: 50,
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
