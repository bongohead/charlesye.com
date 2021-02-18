$(document).ready(function() {

	/*
	var winW = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
	var winH = Math.max(document.documentElement.clientHeight, window.innerHeight || 0);
  
	var w = winW > 1000 ? winW : 1000;
	var h = winW > 800 ? winW : 800;
	var location = {};
  
  */	
	
	function newSvg(elName, appendTo) {
		var el = $(document.createElementNS('http://www.w3.org/2000/svg',elName));
		if (appendTo) return el.appendTo(appendTo);
		return el;
	}
  
	var svgOuter = $('<svg width="50%" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" id="svg-outer"></svg>').appendTo('#svg-container');
	
	/* Uncomment to enable grid
	(function() {
		var grid = newSvg('g', svgOuter);
		
		for(var i=0;i<=100;i++) {
			var stroke = (i%10===0 ? 'blue' : 'rgba(0,0,100,0.1)');
			var strokeWidth = (i%10===0 ? 0.1 : 0.01);
	
			newSvg('path',grid)
				.attr({
					"d": `M${i} 0 V 100`,
					"stroke": stroke,
					"stroke-width": strokeWidth
				});
				
			newSvg('path',grid)
				.attr({
					"d": `M0 ${i} H 100`,
					"stroke": stroke,
					"stroke-width": strokeWidth
				});
		}
	})();
	*/
	
	var svg = newSvg('g',svgOuter)
		.attr({
			transform: 'translate(0 100) scale(1,-1)',
			id: 'svg'
		});

	
	(function() {
		var name = 'star1';
		var loc = {originX: 20,originY: 20,width:60,height: 60};
		var planeCount = 500;
		
		var g = newSvg('g',svg)
			.attr({id: name})
			.data({loc:loc,planeCount:planeCount});

			/*
		var grMap = gradient.create(
			[0,10,20,30,40,50,70,85,95,100],
			['rgba(0,0,0,.3)','rgba(5,0,255,.5)','rgba(0,132,255,.5)','rgba(0,212,255,.5)','rgba(0,255,204,.5)','rgba(253,255,53,.5)','rgba(255,160,0,.5)','rgba(255,50,0,.5)','rgba(255,0,122,.5)','rgba(255,255,255,.2)'],
			'rgba'
		);*/
		var grMap = gradient.create(
			[0,10,20,30,40,50,60,80,95,100],
			['rgba(250,250,250,0.05)','rgba(100,155,104,0.05)','rgba(155,50,155,.2)','rgba(50,80,128,0.2)','rgba(50,50,50,.2)','rgba(15,50,50,.2)','rgba(255,0,122,.2)','rgba(10,10,100,0.2)','rgba(255,50,150,.2)','rgba(255,255,255,.2)'],
			'rgba'
		);

		for (var i=0;i<=100;i+=100/planeCount) {
			var color = gradient.valToColor(i,grMap,'rgba');
			var scale =  (1-i/100);
			var dur = ((i/20+10.0).toFixed(4)).toString() + 's';
			var rect = newSvg('rect',g)
				.attr({
					x: loc.originX+(loc.width/2)*i/100,
					y: loc.originY+(loc.height/2)*i/100,
					width: loc.width*scale,
					height: loc.height*scale,
					fill: color,
					id:  g + '-' + i.toFixed(1).replace('.','pt')
				});
			
			var animateRotation = newSvg('animateTransform', rect)
				.attr({
					attributeType: 'xml',
					attributeName: 'transform',
					type: 'rotate',
					from: '0 '+ (loc.originX+loc.width/2).toFixed(1) +' '+(loc.originY + loc.height/2).toFixed(1),
					to: '360 '+ (loc.originX+loc.width/2).toFixed(1)+' '+(loc.originY + loc.height/2).toFixed(1),
					dur: dur,
					additive: 'sum',
					repeatCount: 'indefinite'
				});
		}
		
	})();
		


	document.querySelectorAll('#svg text').forEach(function(el){
		var transform = 'scale(1,-1) '+ 'translate(0,'+(-el.getAttribute('y')*2).toFixed(2)+')';
		el.setAttribute('transform',transform);
	});
	

	Highcharts.theme = {
  "colors": ["#A9CF54", "#C23C2A", "#FFFFFF", "#979797", "#FBB829"],
  "chart": {
    "backgroundColor": "black",
    "style": {
      "color": "white"
    }
  },
  "legend": {
    "enabled": true,
    "align": "right",
    "verticalAlign": "bottom",
    "itemStyle": {
      "color": "#C0C0C0"
    },
    "itemHoverStyle": {
      "color": "#C0C0C0"
    },
    "itemHiddenStyle": {
      "color": "#444444"
    }
  },
  "title": {
    "text": {},
    "style": {
      "color": "#FFFFFF"
    }
  },
  "tooltip": {
    "backgroundColor": "#1C242D",
    "borderColor": "#1C242D",
    "borderWidth": 1,
    "borderRadius": 0,
    "style": {
      "color": "#FFFFFF"
    }
  },
  "subtitle": {
    "style": {
      "color": "#666666"
    }
  },
  "xAxis": {
    "gridLineColor": "#2E3740",
    "gridLineWidth": 1,
    "labels": {
      "style": {
        "color": "#525252"
      }
    },
    "lineColor": "#2E3740",
    "tickColor": "#2E3740",
    "title": {
      "style": {
        "color": "#FFFFFF"
      },
      "text": {}
    }
  },
  "yAxis": {
    "gridLineColor": "#2E3740",
    "gridLineWidth": 1,
    "labels": {
      "style": {
        "color": "#525252"
      },
      "lineColor": "#2E3740",
      "tickColor": "#2E3740",
      "title": {
        "style": {
          "color": "#FFFFFF"
        },
        "text": {}
      }
    }
  }
  };
	// Apply the theme
	Highcharts.setOptions(Highcharts.theme);

  
});

