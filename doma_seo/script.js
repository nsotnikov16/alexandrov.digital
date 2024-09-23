
const data1 = {
    labels: [
        'авг. 2021',
        'сент 2021',
        'окт. 2021',
        'нояб. 2021',
        'дек. 2021',
        'янв. 2022',
        'февр. 2022',
        'мар. 2022',
        ''
    ],
    datasets: [{
        label: 'Показатель',
        data: [90, 95, 92, 98, 110, 170, 240, 285, 360],
        backgroundColor: '#c6dafc',
        borderColor: '#4285f4',
        borderWidth: 2,
        fill: true,
        pointRadius: 0,
        pointBackgroundColor: 'rgba(54, 162, 235, 1)',
        tension: 0.4  // Плавная закругленная линия
    }]
};

const data2 = {
    labels: ['Было', 'Стало'],
    datasets: [{
        label: 'Цена',
        data: [6500, 4500],  // Укажи свои данные здесь
        backgroundColor: '#4285f4',
        borderColor: 'rgba(54, 162, 235, 1)',
        borderWidth: 1,
        barPercentage: 0.6,  // Уменьшает ширину столбцов
        categoryPercentage: 0.6  // Дополнительная настройка ширины столбцов
    }]
};

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
            type: 'bar',
            data: data2,
            options: {
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true,
                        max: 8000,  // Устанавливаем максимальное значение на оси Y
                        ticks: {
                            stepSize: 2000,
                            callback: function (value) {
                                return value + '₽'; // Добавляет знак рубля
                            }
                        }
                    }
                }
            }
        });
    })
})
