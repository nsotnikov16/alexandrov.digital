

const data1 = {
    labels: ['Было', 'Стало'],
    datasets: [{
        label: 'Цена',
        data: [5500, 3600],  // Укажи свои данные здесь
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
            type: 'bar',
            data: data1,
            options: {
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true,
                        max: 6000,  // Устанавливаем максимальное значение на оси Y
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
