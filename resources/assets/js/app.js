$(function(){
  $('#world-map').vectorMap({
    map: 'world_mill_en',
    scaleColors: ['#C8EEFF', '#0071A4'],
    normalizeFunction: 'polynomial',
    hoverOpacity: 0.7,
    hoverColor: false,
    zoomOnScroll: false,
    markerStyle: {
      initial: {
        fill: '#ed2623',
        stroke: '#ed2623'
      }
    },

    regionStyle: {
      initial: {
        fill: '#aaa'
      }
    },

    backgroundColor: 'rgba(255,255,255,0)',
    markers: [
      { latLng: [23.424076, 53.847818], name: 'United Arab Emirates' },
      { latLng: [20.593684, 78.96288], name: 'India' },
      { latLng: [12.226079, -69.060087], name: 'Netherlands' },
      { latLng: [51.165691, 10.451526], name: 'Germany' },
      { latLng: [55.378051, -3.435973], name: 'United Kingdom' },
      { latLng: [46.227638, 2.213749], name: 'France' },
      { latLng: [40.463667, -3.74922], name: 'Spain' },
      { latLng: [53.41291, -8.24389], name: 'Ireland' },
      { latLng: [50.503887, 4.469936], name: 'Belgium' },
      { latLng: [42.733883, 25.48583], name: 'Bulgaria' },
      { latLng: [42.602636, 20.902977], name: 'Kosovo' },
      { latLng: [-0.023559, 37.906193], name: 'Kenya' },
      { latLng: [9.081999, 8.675277], name: 'Nigeria' },
      { latLng: [22.396428, 114.109497], name: 'Hong Kong' },
      { latLng: [35.86166, 104.195397], name: 'China' },
      { latLng: [14.058324, 108.277199], name: 'Vietnam' },
      { latLng: [1.352083, 103.819836], name: 'Singapore' },
      { latLng: [56.879635, 24.603189], name: 'Latvia' },
      { latLng: [37.09024, -95.712891], name: 'United States of America' }
    ]
  });
});