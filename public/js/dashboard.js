







// Пробелы на балансе
document.addEventListener('DOMContentLoaded', function() {
    // Форматирование всех элементов с балансом
    const balanceElements = document.querySelectorAll('[data-balance]');
    
    balanceElements.forEach(function(element) {
        const balance = element.getAttribute('data-balance');
        if (balance) {
            element.textContent = formatNumber(balance);
        }
    });
    
    // Функция форматирования
    function formatNumber(number) {
        return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ' ');
    }
});


// Access Form
document.addEventListener("DOMContentLoaded", () => {
  echarts.init(document.querySelector("#trafficChart")).setOption({
    tooltip: {
      trigger: 'item'
    },
    legend: {
      top: '5%',
      left: 'center'
    },
    series: [{
      name: 'Access From',
      type: 'pie',
      radius: ['40%', '70%'],
      avoidLabelOverlap: false,
      label: {
        show: false,
        position: 'center'
      },
      emphasis: {
        label: {
          show: true,
          fontSize: '18',
          fontWeight: 'bold'
        }
      },
      labelLine: {
        show: false
      },
      data: chartData
    }]
  });
});
