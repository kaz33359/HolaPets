try {


  /*
      ==============================
      |    @Options Charts Script   |
      ==============================
  */

  /*
      ======================================
          Visitor Statistics | Options
      ======================================
  */

  
  // Total Visits

  var spark1 = {
      chart: {
          id: 'unique-visits',
          group: 'sparks2',
          type: 'line',
          height: 58,
          sparkline: {
              enabled: true
          },
      },
      series: [{
          data: [21, 9, 36, 12, 44, 25, 59, 41, 66, 25]
      }],
      stroke: {
        curve: 'smooth',
        width: 2,
      },
      markers: {
          size: 0
      },
      grid: {
        padding: {
          top: 0,
          bottom: 0,
          left: 0
        }
      },
      colors: ['#2196f3'],
      tooltip: {
          x: {
              show: false
          },
          y: {
              title: {
                  formatter: function formatter(val) {
                      return '';
                  }
              }
          }
      },
      responsive: [
      {
          breakpoint: 576,
          options: {
             chart: {
                height: 95,
            },
            grid: {
                padding: {
                  top: 45,
                  bottom: 0,
                  left: 0
                }
            },
          },
      }

      ]
  }

  // Paid Visits

  var spark2 = {
      chart: {
        id: 'total-users',
        group: 'sparks1',
        type: 'line',
        height: 58,
        sparkline: {
          enabled: true
        },
      },
      series: [{
        data: [22, 19, 30, 47, 32, 44, 34, 55, 41, 69]
      }],
      stroke: {
        curve: 'smooth',
        width: 2,
      },
      markers: {
        size: 0
      },
      grid: {
        padding: {
          top: 0,
          bottom: 0,
          left: 0
        }
      },
      colors: ['#e2a03f'],
      tooltip: {
        x: {
          show: false
        },
        y: {
          title: {
            formatter: function formatter(val) {
              return '';
            }
          }
        }
      },
      responsive: [
      {
          breakpoint: 576,
          options: {
             chart: {
                height: 95,
            },
            grid: {
                padding: {
                  top: 35,
                  bottom: 0,
                  left: 0
                }
            },
          },
      }
      ]
  }
  

  /*
      ===================================
          Unique Visitors | Options
      ===================================
  */

 var d_1options1 = {
    chart: {
      height: 350,
      type: 'line',
      toolbar: {
        show: false,
      }
    },
    plotOptions: {
      bar: {
          horizontal: false,
          columnWidth: '55%',
      },
    },
    legend: {
      offsetX: 0,
      offsetY: -10,
    },
    colors: ['#61b6cd', '#805dca'],
    // colors: ['#f67062', '#517281'],
    
    series: [{
      name: 'Organic',
      type: 'column',
      data: [4400, 5050, 4140, 6710, 2270, 4130, 2010, 3520, 7520, 3200, 2570, 1600]
    }, {
      name: 'Direct',
      type: 'line',
      data: [230, 420, 350, 270, 430, 220, 170, 310, 220, 220, 120, 160]
    }],
    stroke: {
      show: true,
      curve: 'smooth',
      width: [0, 4],
      lineCap: 'square'
    },
    xaxis: {
      categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
    },
    yaxis: [{
      title: {
        text: 'Organic',
      },
  
    }, {
      opposite: true,
      title: {
        text: 'Direct'
      }
    }],

    responsive: [{
      breakpoint: 576,
      options: {
        yaxis: [{
          title: {
            text: undefined,
          },
      
        }, {
          opposite: true,
          title: {
            text: undefined
          }
        }],
      },
    }]
  
  }


  /*
      =============================
          Total Orders | Options
      =============================
  */ 
 var d_2options2 = {
  chart: {
    id: 'sparkline1',
    group: 'sparklines',
    type: 'area',
    height: 315,
    sparkline: {
      enabled: true
    },
  },
  stroke: {
      curve: 'smooth',
      width: 2
  },
  fill: {
    opacity: 1,
  },
  series: [{
    name: 'Sales',
    data: [28, 40, 36, 52, 38, 60, 38, 52, 36, 40]
  }],
  labels: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10'],
  yaxis: {
    min: 0
  },
  grid: {
    padding: {
      top: 125,
      right: 0,
      bottom: 0,
      left: 0
    }, 
  },
  tooltip: {
    x: {
      show: false,
    },
    theme: 'dark'
  },
  colors: ['#1abc9c']
}

  /*
      ==============================
          Statistics | Options
      ==============================
  */

  // Followers

  // var d_1options3 = {
  //   chart: {
  //     id: 'sparkline1',
  //     type: 'area',
  //     height: 160,
  //     sparkline: {
  //       enabled: true
  //     },
  //   },
  //   stroke: {
  //       curve: 'smooth',
  //       width: 2,
  //   },
  //   series: [{
  //     name: 'Sales',
  //     data: [38, 60, 38, 52, 36, 40, 28 ]
  //   }],
  //   labels: ['1', '2', '3', '4', '5', '6', '7'],
  //   yaxis: {
  //     min: 0
  //   },
  //   colors: ['#4361ee'],
  //   tooltip: {
  //     x: {
  //       show: false,
  //     }
  //   },
  // }

  // Referral

  // var d_1options4 = {
  //   chart: {
  //     id: 'sparkline1',
  //     type: 'area',
  //     height: 160,
  //     sparkline: {
  //       enabled: true
  //     },
  //   },
  //   stroke: {
  //       curve: 'smooth',
  //       width: 2,
  //   },
  //   series: [{
  //     name: 'Sales',
  //     data: [ 60, 28, 52, 38, 40, 36, 38]
  //   }],
  //   labels: ['1', '2', '3', '4', '5', '6', '7'],
  //   yaxis: {
  //     min: 0
  //   },
  //   colors: ['#e7515a'],
  //   tooltip: {
  //     x: {
  //       show: false,
  //     }
  //   }
  // }

  // Engagement Rate

  // var d_1options5 = {
  //   chart: {
  //     id: 'sparkline1',
  //     type: 'area',
  //     height: 160,
  //     sparkline: {
  //       enabled: true
  //     },
  //   },
  //   stroke: {
  //       curve: 'smooth',
  //       width: 2,
  //   },
  //   fill: {
  //     opacity: 1,
  //   },
  //   series: [{
  //     name: 'Sales',
  //     data: [28, 50, 36, 60, 38, 52, 38 ]
  //   }],
  //   labels: ['1', '2', '3', '4', '5', '6', '7'],
  //   yaxis: {
  //     min: 0
  //   },
  //   colors: ['#1abc9c'],
  //   tooltip: {
  //     x: {
  //       show: false,
  //     }
  //   }
  // }

  

  /*
      =============================
          Daily Sales | Options
      =============================
  */
 var d_2options1 = {
  chart: {
        height: 160,
        type: 'bar',
        stacked: true,
        toolbar: {
          show: false,
        }
    },
    dataLabels: {
        enabled: false,
    },
    stroke: {
        show: true,
        width: 1,
    },
    colors: ['#e2a03f', '#e0e6ed'],
    responsive: [{
        breakpoint: 480,
        options: {
            legend: {
                position: 'bottom',
                offsetX: -10,
                offsetY: 0
            }
        }
    }],
    series: [{
        name: 'Sales',
        data: [44, 55, 41, 67, 22, 43, 21]
    },{
        name: 'Last Week',
        data: [13, 23, 20, 8, 13, 27, 33]
    }],
    xaxis: {
        labels: {
            show: false,
        },
        categories: ['Sun', 'Mon', 'Tue', 'Wed', 'Thur', 'Fri', 'Sat'],
    },
    yaxis: {
        show: false
    },
    fill: {
        opacity: 1
    },
    plotOptions: {
        bar: {
            horizontal: false,
            startingShape: 'rounded',
            endingShape: 'rounded',
            columnWidth: '25%',
            
        }
    },
    legend: {
        show: false,
    },
    grid: {
        show: false,
        xaxis: {
            lines: {
                show: false
            }
        },
        padding: {
          top: 10,
          right: 0,
          bottom: -40,
          left: 0
        }, 
    },
}


  /*
      ==================================
          Sales By Category | Options
      ==================================
  */

 var options = {
  chart: {
      type: 'donut',
      width: 397
  },
  colors: ['#2196f3', '#e2a03f', '#8738a7'],
  dataLabels: {
    enabled: false
  },
  legend: {
      position: 'bottom',
      horizontalAlign: 'center',
      fontSize: '14px',
      markers: {
        width: 10,
        height: 10,
      },
      itemMargin: {
        horizontal: 0,
        vertical: 8
      }
  },
  plotOptions: {
    pie: {
      donut: {
        size: '65%',
        background: 'transparent',
        labels: {
          show: true,
          name: {
            show: true,
            fontSize: '29px',
            fontFamily: 'quicksand, sans-serif',
            color: undefined,
            offsetY: -10
          },
          value: {
            show: true,
            fontSize: '26px',
            fontFamily: 'quicksand, sans-serif',
            color: '20',
            offsetY: 16,
            formatter: function (val) {
              return val
            }
          },
          total: {
            show: true,
            showAlways: true,
            label: 'Total',
            color: '#888ea8',
            formatter: function (w) {
              return w.globals.seriesTotals.reduce( function(a, b) {
                return a + b
              }, 0)
            }
          }
        }
      }
    }
  },
  stroke: {
    show: true,
    width: 25,
  },
  series: [985, 737, 270],
  labels: ['Apparel', 'Sports', 'Others'],
  responsive: [{
      breakpoint: 1599,
      options: {
          chart: {
              width: '350px',
              height: '400px'
          },
          legend: {
              position: 'bottom'
          }
      },

      breakpoint: 1439,
      options: {
          chart: {
              width: '250px',
              height: '390px'
          },
          legend: {
              position: 'bottom'
          },
          plotOptions: {
            pie: {
              donut: {
                size: '65%',
              }
            }
          }
      },
  }]
}


  /*
      ==============================
      |    @Render Charts Script    |
      ==============================
  */
 /*
      ============================
          Daily Sales | Render
      ============================
  */
 var d_2C_1 = new ApexCharts(document.querySelector("#daily-sales"), d_2options1);
 d_2C_1.render();


   /*
      =================================
          Sales By Category | Render
      =================================
  */
 var chart = new ApexCharts(
  document.querySelector("#chart-2"),
  options
);

chart.render();
 

  /*
      ======================================
          Visitor Statistics | Script
      ======================================
  */

  // Total Visits
  d_1C_1 = new ApexCharts(document.querySelector("#total-users"), spark1);
  d_1C_1.render();

  // Paid Visits
  d_1C_2 = new ApexCharts(document.querySelector("#paid-visits"), spark2);
  d_1C_2.render();

  /*
      ===================================
          Unique Visitors | Script
      ===================================
  */

  var d_1C_3 = new ApexCharts(
      document.querySelector("#uniqueVisits"),
      d_1options1
  );
  d_1C_3.render();

  /*
      ==============================
          Statistics | Script
      ==============================
  */


  // Followers

  // var d_1C_5 = new ApexCharts(document.querySelector("#hybrid_followers"), d_1options3);
  // d_1C_5.render()

  // Referral

  // var d_1C_6 = new ApexCharts(document.querySelector("#hybrid_followers1"), d_1options4);
  // d_1C_6.render()

  // Engagement Rate

  // var d_1C_7 = new ApexCharts(document.querySelector("#hybrid_followers3"), d_1options5);
  // d_1C_7.render()

/*
      ============================
          Total Orders | Render
      ============================
  */
 var d_2C_2 = new ApexCharts(document.querySelector("#total-orders"), d_2options2);
 d_2C_2.render();

/*
    =============================================
        Perfect Scrollbar | Notifications
    =============================================
*/
const ps = new PerfectScrollbar(document.querySelector('.mt-container'));


} catch(e) {
// statements
console.log(e);
}
