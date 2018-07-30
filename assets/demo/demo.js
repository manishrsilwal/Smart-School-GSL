demo = {
  initPickColor: function() {
    $('.pick-class-label').click(function() {
      var new_class = $(this).attr('new-class');
      var old_class = $('#display-buttons').attr('data-class');
      var display_div = $('#display-buttons');
      if (display_div.length) {
        var display_buttons = display_div.find('.btn');
        display_buttons.removeClass(old_class);
        display_buttons.addClass(new_class);
        display_div.attr('data-class', new_class);
      }
    });
  },

  initDocChart: function() {
    chartColor = "#FFFFFF";

    ctx = document.getElementById('chartHours').getContext("2d");

    myChart = new Chart(ctx, {
      type: 'line',

      data: {
        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct"],
        datasets: [{
            borderColor: "#6bd098",
            backgroundColor: "#6bd098",
            pointRadius: 0,
            pointHoverRadius: 0,
            borderWidth: 3,
            data: [300, 310, 316, 322, 330, 326, 333, 345, 338, 354]
          },
          {
            borderColor: "#f17e5d",
            backgroundColor: "#f17e5d",
            pointRadius: 0,
            pointHoverRadius: 0,
            borderWidth: 3,
            data: [320, 340, 365, 360, 370, 385, 390, 384, 408, 420]
          },
          {
            borderColor: "#fcc468",
            backgroundColor: "#fcc468",
            pointRadius: 0,
            pointHoverRadius: 0,
            borderWidth: 3,
            data: [370, 394, 415, 409, 425, 445, 460, 450, 478, 484]
          }
        ]
      },
      options: {
        legend: {
          display: false
        },

        tooltips: {
          enabled: false
        },

        scales: {
          yAxes: [{

            ticks: {
              fontColor: "#9f9f9f",
              beginAtZero: false,
              maxTicksLimit: 5,
              //padding: 20
            },
            gridLines: {
              drawBorder: false,
              zeroLineColor: "#ccc",
              color: 'rgba(255,255,255,0.05)'
            }

          }],

          xAxes: [{
            barPercentage: 1.6,
            gridLines: {
              drawBorder: false,
              color: 'rgba(255,255,255,0.1)',
              zeroLineColor: "transparent",
              display: false,
            },
            ticks: {
              padding: 20,
              fontColor: "#9f9f9f"
            }
          }]
        },
      }
    });

  },

  initChartsPages: function() {
    chartColor = "#FFFFFF";

    ctx = document.getElementById('chartHours').getContext("2d");

    myChart = new Chart(ctx, {
      type: 'line',

      data: {
        labels: ['Class 8 "A"', 'Class 8 "B"', 'Class 8 "C"', 'Class 9 "A"', 'Class 9 "B"', 'Class 9 "C"', 'Class 10"A"', 'Class 10"B"', 'Class 10"C"'],
        datasets: [{
            label:"Average marks",
            borderColor: "#6bd098",
            pointRadius: 5,
            pointHoverRadius: 8,
            fill: false,
            borderWidth: 3,
            data: [85, 50, 65, 75, 88, 68, 79, 91, 83],
            lineTension: 0.1
          },

        ]
      },
      options: {
        legend: {
          display: false
        },

        tooltips: {
          enabled: true
        },

        scales: {
          yAxes: [{
            scaleLabel: {
              display: true,
              labelString: 'Marks Obtained'
            },
            ticks: {
              fontColor: "#9f9f9f",
              beginAtZero: true,
              maxTicksLimit: 5,
              padding: 20
            },
            gridLines: {
              drawBorder: true,
              zeroLineColor: "#ccc",
              color: '#BABABA',
              display: false
            }

          }],

          xAxes: [{
            scaleLabel: {
              display: true,
              labelString: 'Classes'
            },
            gridLines: {
              drawBorder: true,
              color: '#C6C6C6',
              zeroLineColor: "#ccc",
              display: false
            },
            ticks: {
              padding: 20,
              fontColor: "#9f9f9f"
            }
          }]
        },
      }
    });

    ctx = document.getElementById('chartEmail').getContext("2d");

    myChart = new Chart(ctx, {
      type: 'pie',
      data: {
        labels: [1, 2, 3],
        datasets: [{
          label: "Emails",
          pointRadius: 0,
          pointHoverRadius: 0,
          backgroundColor: [
            '#e3e3e3',
            '#4acccd',
            '#fcc468',
            '#ef8157'
          ],
          borderWidth: 0,
          data: [342, 480, 530, 120]
        }]
      },

      options: {

        legend: {
          display: false
        },

        pieceLabel: {
          render: 'percentage',
          fontColor: ['white'],
          precision: 2
        },

        tooltips: {
          enabled: false
        },

        scales: {
          yAxes: [{

            ticks: {
              display: false
            },
            gridLines: {
              drawBorder: false,
              zeroLineColor: "transparent",
              color: 'rgba(255,255,255,0.05)'
            }

          }],

          xAxes: [{
            barPercentage: 1.6,
            gridLines: {
              drawBorder: false,
              color: 'rgba(255,255,255,0.1)',
              zeroLineColor: "transparent"
            },
            ticks: {
              display: false,
            }
          }]
        },
      }
    });

    var speedCanvas = document.getElementById("speedChart");

    var dataFirst = {
      data: [0, 19, 15, 20, 30, 40, 40, 50, 25, 30, 50, 70],
      fill: false,
      borderColor: '#fbc658',
      backgroundColor: 'transparent',
      pointBorderColor: '#fbc658',
      pointRadius: 4,
      pointHoverRadius: 4,
      pointBorderWidth: 8,
    };

    var dataSecond = {
      data: [0, 5, 10, 12, 20, 27, 30, 34, 42, 45, 55, 63],
      fill: false,
      borderColor: '#51CACF',
      backgroundColor: 'transparent',
      pointBorderColor: '#51CACF',
      pointRadius: 4,
      pointHoverRadius: 4,
      pointBorderWidth: 8
    };

    var speedData = {
      labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
      datasets: [dataFirst, dataSecond]
    };

    var chartOptions = {
      legend: {
        display: false,
        position: 'top'
      }
    };

    var lineChart = new Chart(speedCanvas, {
      type: 'line',
      hover: false,
      data: speedData,
      options: chartOptions
    });
  },

  initGoogleMaps: function() {
    var myLatlng = new google.maps.LatLng(40.748817, -73.985428);
    var mapOptions = {
      zoom: 13,
      center: myLatlng,
      scrollwheel: false, //we disable de scroll over the map, it is a really annoing when you scroll through page
      styles: [{
        "featureType": "water",
        "stylers": [{
          "saturation": 43
        }, {
          "lightness": -11
        }, {
          "hue": "#0088ff"
        }]
      }, {
        "featureType": "road",
        "elementType": "geometry.fill",
        "stylers": [{
          "hue": "#ff0000"
        }, {
          "saturation": -100
        }, {
          "lightness": 99
        }]
      }, {
        "featureType": "road",
        "elementType": "geometry.stroke",
        "stylers": [{
          "color": "#808080"
        }, {
          "lightness": 54
        }]
      }, {
        "featureType": "landscape.man_made",
        "elementType": "geometry.fill",
        "stylers": [{
          "color": "#ece2d9"
        }]
      }, {
        "featureType": "poi.park",
        "elementType": "geometry.fill",
        "stylers": [{
          "color": "#ccdca1"
        }]
      }, {
        "featureType": "road",
        "elementType": "labels.text.fill",
        "stylers": [{
          "color": "#767676"
        }]
      }, {
        "featureType": "road",
        "elementType": "labels.text.stroke",
        "stylers": [{
          "color": "#ffffff"
        }]
      }, {
        "featureType": "poi",
        "stylers": [{
          "visibility": "off"
        }]
      }, {
        "featureType": "landscape.natural",
        "elementType": "geometry.fill",
        "stylers": [{
          "visibility": "on"
        }, {
          "color": "#b8cb93"
        }]
      }, {
        "featureType": "poi.park",
        "stylers": [{
          "visibility": "on"
        }]
      }, {
        "featureType": "poi.sports_complex",
        "stylers": [{
          "visibility": "on"
        }]
      }, {
        "featureType": "poi.medical",
        "stylers": [{
          "visibility": "on"
        }]
      }, {
        "featureType": "poi.business",
        "stylers": [{
          "visibility": "simplified"
        }]
      }]

    }
    var map = new google.maps.Map(document.getElementById("map"), mapOptions);

    var marker = new google.maps.Marker({
      position: myLatlng,
      title: "Hello World!"
    });

    // To add the marker to the map, call setMap();
    marker.setMap(map);
  },

  showNotification: function(color, from, align, msg) {
    color = color;

    $.notify({
      icon: "nc-icon nc-check-2",
      message: msg

    }, {
      type: color,
      timer: 8000,
      placement: {
        from: from,
        align: align
      }
    });
  }

};

function initChg() {
  ctx = document.getElementById('class10chart').getContext("2d");

  myChart = new Chart(ctx, {
    type: 'bar',

    data: {
      labels: ['Kawish','Rashika','Samayee', 'Kiran', 'Bhabin'],
      datasets: [{
          label:"Number of absent days",
          borderColor: "rgb(255, 99, 132)",
          backgroundColor: "rgba(255, 99, 132, 0.2)",
          borderWidth: 1,
          fill: false,
          data: [1, 2, 3, 0, 1]}]},

        // {
        //   borderColor: "#f17e5d",
        //   backgroundColor: "#f17e5d",
        //   pointRadius: 0,
        //   pointHoverRadius: 0,
        //   borderWidth: 3,
        //   data: [320, 340, 365, 360, 370, 385, 390, 384, 408, 420]
        // },
        // {
        //   borderColor: "#fcc468",
        //   backgroundColor: "#fcc468",
        //   pointRadius: 0,
        //   pointHoverRadius: 0,
        //   borderWidth: 3,
        //   data: [370, 394, 415, 409, 425, 445, 460, 450, 478, 484]
        // }
    options: {
      legend: {
        display: false
      },

      tooltips: {
        enabled: true
      },
      scales: {
        yAxes: [{
          scaleLabel: {
              display: true,
              labelString: 'Number of Absent Days'
            },
          ticks: {
            fontColor: "#9f9f9f",
            beginAtZero: true,
            maxTicksLimit: 7,
            //padding: 20
          },
          gridLines: {
            drawBorder: true,
            zeroLineColor: "#ccc",
            color: '#BABABA',
            display: false,
          }

        }],

        xAxes: [{
          scaleLabel: {
              display: true,
              labelString: 'Name of Students'
            },
          gridLines: {
            drawBorder: true,
            color: '#C6C6C6',
            zeroLineColor: "#ccc",
            display: false,
          },
          ticks: {
            padding: 20,
            fontColor: "#9f9f9f",
            beginAtZero: true
          }
        }]
      },
    }
  });
}

function initscatter(){
  ctx = document.getElementById('criticalstudentsmarks').getContext("2d");
  var scatterChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Class 8 "A"', 'Class 8 "B"', 'Class 8 "C"', 'Class 9 "A"', 'Class 9 "B"', 'Class 9 "C"', 'Class 10"A"', 'Class 10"B"', 'Class 10"C"'],
      datasets: [{
         label: 'Manish',
         data: [1, 0, 0, 0, 0, 0, 0, 0, 0],
         backgroundColor: '#D50000'
      }, {
         label: 'Karan',
         data: [2, 0, 0, 0, 0, 0, 0, 0, 0],
         backgroundColor: '#F57F17'
      }, {
         label: 'Jagdish',
         data: [3, 0, 0, 0, 0, 0, 0, 0, 0],
         backgroundColor: '#FF5722'
      },
      {
         label: 'Kiran',
         data: [4, 0, 0, 0, 0, 0, 0, 0, 0],
         backgroundColor: '#FFCA28'
      },
      {
         label: 'Lalit',
         data: [5, 0, 0, 0, 0, 0, 0, 0, 0],
         backgroundColor: '#FFCC80'
      },

      {
         label: 'Hem',
         data: [0, 1, 0, 0, 0, 0, 0, 0, 0],
         backgroundColor: '#DD1C1A'
      }, {
         label: 'Karuna',
         data: [0, 3, 0, 0, 0, 0, 0, 0, 0],
         backgroundColor: '#BB4D00'
      }, {
         label: 'Jannie',
         data: [0, 6, 0, 0, 0, 0, 0, 0, 0],
         backgroundColor: '#DA2C38'
      },
      {
         label: 'Kingjoon',
         data: [0, 7, 0, 0, 0, 0, 0, 0, 0],
         backgroundColor: '#BC4B51'
      },
      {
         label: 'Rawal',
         data: [0, 7, 0, 0, 0, 0, 0, 0, 0],
         backgroundColor: '#EA8C55'
      },

      {
         label: 'Ronesh',
         data: [0, 0, 6, 0, 0, 0, 0, 0, 0],
         backgroundColor: '#FF4A1C'
      },
      {
         label: 'Sakshi',
         data: [0, 0, 8, 0, 0, 0, 0, 0, 0],
         backgroundColor: '#E9190F'
      },
      {
         label: 'Ishan',
         data: [0, 0, 8, 0, 0, 0, 0, 0, 0],
         backgroundColor: '#A30000'
      },
      {
         label: 'Hope',
         data: [0, 0, 7, 0, 0, 0, 0, 0, 0],
         backgroundColor: '#F5BB00'
      },
      {
         label: 'Mangal',
         data: [0, 0, 10, 0, 0, 0, 0, 0, 0],
         backgroundColor: '#8EA604'
      },

      {
         label: 'Kenny',
         data: [0, 0, 0, 3, 0, 0, 0, 0, 0],
         backgroundColor: '#D50000'
      }, {
         label: 'Lagan',
         data: [0, 0, 0, 4, 0, 0, 0, 0, 0],
         backgroundColor: '#F57F17'
      }, {
         label: 'Keyrun',
         data: [0, 0, 0, 6, 0, 0, 0, 0, 0],
         backgroundColor: '#FF5722'
      },
      {
         label: 'Nikhil',
         data: [0, 0, 0, 6, 0, 0, 0, 0, 0],
         backgroundColor: '#FFCA28'
      },
      {
         label: 'Chemjong',
         data: [0, 0, 0, 7, 0, 0, 0, 0, 0],
         backgroundColor: '#FFCC80'
      },

      {
         label: 'Kanchan',
         data: [0, 0, 0, 0, 5, 0, 0, 0, 0],
         backgroundColor: '#DD1C1A'
      }, {
         label: 'Hempal',
         data: [0, 0, 0, 0, 6, 0, 0, 0, 0],
         backgroundColor: '#BB4D00'
      }, {
         label: 'Manju',
         data: [0, 0, 0, 0, 6, 0, 0, 0, 0],
         backgroundColor: '#DA2C38'
      },
      {
         label: 'Rupesh',
         data: [0, 0, 0, 0, 8, 0, 0, 0, 0],
         backgroundColor: '#BC4B51'
      },
      {
         label: 'Ravi',
         data: [0, 0, 0, 0, 9, 0, 0, 0, 0],
         backgroundColor: '#EA8C55'
      },

      {
         label: 'Sisam',
         data: [0, 0, 0, 0, 0, 1, 0, 0, 0],
         backgroundColor: '#FF4A1C'
      }, {
         label: 'Pratibha',
         data: [0, 0, 0, 0, 0, 5, 0, 0, 0],
         backgroundColor: '#E9190F'
      }, {
         label: 'Hemraj',
         data: [0, 0, 0, 0, 0, 5, 0, 0, 0],
         backgroundColor: '#A30000'
      },
      {
         label: 'Lav',
         data: [0, 0, 0, 0, 0, 6, 0, 0, 0],
         backgroundColor: '#F5BB00'
      },
      {
         label: 'Kush',
         data: [0, 0, 0, 0, 0, 7, 0, 0, 0],
         backgroundColor: '#8EA604'
      },

      {
         label: 'Kawish',
         data: [0, 0, 0, 0, 0, 0, 4, 0, 0],
         backgroundColor: '#DD1C1A'
      }, {
         label: 'Bhabin',
         data: [0, 0, 0, 0, 0, 0, 5, 0, 0],
         backgroundColor: '#BB4D00'
      }, {
         label: 'Samayee',
         data: [0, 0, 0, 0, 0, 0, 6, 0, 0],
         backgroundColor: '#DA2C38'
      },
      {
         label: 'Rashika',
         data: [0, 0, 0, 0, 0, 0, 7, 0, 0],
         backgroundColor: '#BC4B51'
      },
      {
         label: 'Kiran',
         data: [0, 0, 0, 0, 0, 0, 7, 0, 0],
         backgroundColor: '#EA8C55'
      },

      {
         label: 'Manisha',
         data: [0, 0, 0, 0, 0, 0, 0, 2, 0],
         backgroundColor: '#D50000'
      }, {
         label: 'Karana',
         data: [0, 0, 0, 0, 0, 0, 0, 2, 0],
         backgroundColor: '#F57F17'
      }, {
         label: 'Jaggu',
         data: [0, 0, 0, 0, 0, 0, 0, 3, 0],
         backgroundColor: '#FF5722'
      },
      {
         label: 'Suresh',
         data: [0, 0, 0, 0, 0, 0, 0, 8, 0],
         backgroundColor: '#FFCA28'
      },
      {
         label: 'Layla',
         data: [0, 0, 0, 0, 0, 0, 0, 9, 0],
         backgroundColor: '#FFCC80'
      },

      {
         label: 'Mala',
         data: [0, 0, 0, 0, 0, 0, 0, 0, 1],
         backgroundColor: '#FF4A1C'
      }, {
         label: 'Dipesh',
         data: [0, 0, 0, 0, 0, 0, 0, 0, 4],
         backgroundColor: '#E9190F'
      }, {
         label: 'Suman',
         data: [0, 0, 0, 0, 0, 0, 0, 0, 5],
         backgroundColor: '#A30000'
      },
      {
         label: 'Ross',
         data: [0, 0, 0, 0, 0, 0, 0, 0, 6],
         backgroundColor: '#F5BB00'
      },
      {
         label: 'Monica',
         data: [0, 0, 0, 0, 0, 0, 0, 0, 8],
         backgroundColor: '#8EA604'
      },

      ]
  },
    options: {
      legend: {
         display: false // place legend on the right side of chart
      },
      scales: {
         xAxes: [{
            stacked: true // this should be set to make the bars stacked
         }],
         yAxes: [{
            stacked: true // this also..
         }]
      }
   }
});

}