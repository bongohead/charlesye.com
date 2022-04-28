$(document).ready(function() {

	/*
	var winW = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
	var winH = Math.max(document.documentElement.clientHeight, window.innerHeight || 0);
  
	var w = winW > 1000 ? winW : 1000;
	var h = winW > 800 ? winW : 800;
	var location = {};
  
  */	
	function newSvg(elName,appendTo) {
		var el = $(document.createElementNS('http://www.w3.org/2000/svg',elName));
		if (appendTo) return el.appendTo(appendTo);
		return el;
	}
	var svgOuter = $('<svg width="100%" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" id="svg-outer"></svg>').appendTo('#svg-container');
	var svg = newSvg('g',svgOuter)
		.attr({
			transform: 'translate(0 100) scale(1,-1)',
			id: 'svg'
		});


	(function() {
		var name = 'star1';
		var loc = {originX: 20,originY: 20,width:60,height: 60};
		var planeCount = 100;
		
		var g = newSvg('g',svg)
			.attr({id: name})
			.data({loc:loc,planeCount:planeCount});

		var grMap = gradient.create(
		[0,10,20,30,40,50,70,85,95,100],
		['rgba(255,255,255,.5)','rgba(5,0,255,.5)','rgba(0,132,255,.5)','rgba(0,212,255,.5)','rgba(0,255,204,.5)','rgba(253,255,53,.5)','rgba(255,160,0,.6)','rgba(255,50,0,.6)','rgba(255,0,122,.6)','rgba(255,255,255,.8)'],
		'rgba'
		);

		for (var i=0;i<=100;i+=100/planeCount) {
			var color = gradient.valToColor(i,grMap,'rgba');
			var scale =  1-i/100;
			var dur = ((i/10+2).toFixed(4)).toString() + 's';
			var rect = newSvg('rect',g)
				.attr({
					x: loc.originX+(loc.width/2)*i/100,
					y: loc.originY+(loc.height/2)*i/100,
					width: loc.width*scale,
					height: loc.height*scale,
					fill: color,
					id: name + '-' + i.toFixed(4).replace('.','pt')
				})
				.data({
					'prevColor': color,
					'prevColorIndex': i
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
		
			var interval = setInterval(randomColors, 8000);
			var styleSheet = $('#style');
			var intervalCount = 0;
			function randomColors() {
				//intervalCount++;
				//if (intervalCount > 2) clearInterval(interval);
				var items = [];
				for (var i=0;i<=100;i+=100/planeCount) {
					items.push(i);
				}
				var n = items[Math.floor(Math.random()*items.length)];
				console.log(n);
				var styleObj = {};
				var randColorIndex = Math.floor(Math.random() * 100);
				for (var i=0;i<=100;i+=100/planeCount) {
					if (randColorIndex + i > 100 || n + i > 100) break;
					var id = name + '-' + (i+n).toFixed(4).replace('.','pt');
					var diamond = $('#'+id);
					var prevColorIndex = diamond.data('prevColorIndex');
					var prevColor = diamond.data('prevColor');
					var newColor = gradient.valToColor(randColorIndex+i,grMap,'rgba');
					$(diamond)
						.css({
							"animation-name": 'ani-'+id,
							"animation-duration": '10s',
							"animation-fill-mode": 'forwards'
						})
						.data({
							"prevColor": newColor,
							"prevColorIndex": randColorIndex+i
						})
					
					var rule = `@keyframes ani-${id} {\n` + 
							`0% {fill: ${prevColor};}\n` +
							`20% {fill: ${gradient.valToColor((prevColorIndex+(randColorIndex+i))/2*.2,grMap,'rgba')};}\n` +
							`40% {fill: ${gradient.valToColor((prevColorIndex+(randColorIndex+i))/2*.4,grMap,'rgba')};}\n` +
							`50% {fill: ${gradient.valToColor((prevColorIndex+(randColorIndex+i))/2*.5,grMap,'rgba')};}\n` +
							`60% {fill: ${gradient.valToColor((prevColorIndex+(randColorIndex+i))/2*.6,grMap,'rgba')};}\n` +
							`80% {fill: ${gradient.valToColor((prevColorIndex+(randColorIndex+i))/2*.8,grMap,'rgba')};}\n` +
							`100% {fill: ${newColor};}\n` +
							`}`;
					var styleId = `ani-${id}`;
					
					/*if ($('#'+styleId).length == false) $('head').append('<style id="'+styleId+'" ></style>');
					$('#'+styleId).html(rule);*/
					styleObj[styleId] = rule;
				}
				var styleStr = '';
				$.each(styleObj, function(k,v) {
					styleStr += v + '\n';
				});
				styleSheet.html(styleStr);
			}

		
	})();
	
	
  
  
 
  /********************************************/
  
  //Create SVG container
	(function () {
		/// SUN
/*
		var h = document.querySelector('nav.navbar').clientHeight;;
		var w = h;
		var dim = Math.min(w,h)*2;
		console.log(w);console.log(h);

		var testdiv = document.getElementById('sun-container');


		var svg = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
		svg.setAttribute('width',dim);
		svg.setAttribute('height',dim);
		//svg.style.position = 'absolute';
		//svg.style.top = 0;
		console.log(((w-dim)/2).toString() + 'px');
		//svg.style.left = ((w-dim)/2).toString() + 'px';
		//svg.style.top = ((h-dim)/2).toString() + 'px';

		testdiv.appendChild(svg);

		//Create outer diamond
		var d0 ='M100,0 L200,100 100,200 0,100Z';

		//Define gradient

		var grMap = gradient.create(
		[0,20,40,90,100],
		['rgba(253,255,53,.4)','rgba(255,160,0,.2)','rgba(255,50,0,.2)','rgba(255,200,200,.2)','rgba(255,255,100,.2)'].reverse(),
		'rgba'
		);

		//Draw SVG
		for (var i=0;i<=100;i+=1) {
		var color = gradient.valToColor(i,grMap,'rgba');

		var path = document.createElementNS('http://www.w3.org/2000/svg', 'path');
		var d0 = 'M'+dim/2+','+(i*dim/100).toString()+' L'+(dim-(i*dim/100)).toString()+','+dim/2+' '+dim/2+','+(dim-(i*dim/100)).toString()+' '+i.toString()+','+dim/2+'Z';
		console.log(d0);
		path.setAttribute('d',d0);
		path.setAttribute('fill',color);
		path.setAttribute('id',i);
		svg.appendChild(path);

		var dur = ((i/100+0.1).toFixed(4)).toString() + 's';
		console.log(dur);
		
		path.innerHTML = '<animateTransform attributeType="xml" attributeName="transform" type="rotate" from="0 '+ dim/2 +' '+dim/2+'" to="360 '+ dim/2 +' '+dim/2+'" dur="'+dur+'" data-dur="'+dur+'" additive="sum" repeatCount="indefinite" />';

		path.innerHTML += '<animate attributeType="xml" attributeName="fill" fill="freeze" from="'+color+'" to="'+color+'" dur="2s" repeatCount="0" />';

		//Add animation

		}
*/
/*
		var interval = setInterval(randomColors, 2000);
		
		function randomColors() {

			var n = Math.random();
			n = Math.floor(n*100);

			var randColorIndex = Math.floor(Math.random() * 100);

			//shifts colorIndex by +/- 50
			//var randColorIndex = n + Math.floor(Math.random()*160 -80);

			//var newColor = gradient.valToColor(randColorIndex,grMap,'rgba');

			//document.getElementById(n).setAttribute('fill',newColor);
			var animate = document.getElementById(n).children[0];
			//console.log(animate);
			var dur = animate.getAttribute('dur');
			dur = dur.replace('s', '').toString();
			//	var newDur = (dur * (1+Math.random()-.5)).toFixed(4)+'s'; //random shift in duraiton
			var newDur = (dur*.50).toFixed(4)+'s'; //speed up over time

			//console.log(dur);
			//console.log(newDur);
			//console.log(animate.getAttribute('data-dur'));
			console.log(newDur);
			//animate.setAttribute('dur',newDur);
			/*
			for (var i=0;i<=100;i++) {
			  if (randColorIndex + i > 100 || n + i > 100) break;
			  var newColor = gradient.valToColor(randColorIndex+i,grMap,'rgba');
			  
				var animateColor = document.getElementById(n+i).children[1];
				var oldColor = animateColor.getAttribute('from');
				animateColor.setAttribute('from',oldColor);

				animateColor.setAttribute('to',newColor);
				document.getElementById(n+i).setAttribute('fill',newColor);
				
			}*/

		//}

	})();
  


	
	/*
	function newSvg(elName, appendTo) {
		var el = $(document.createElementNS('http://www.w3.org/2000/svg',elName));
		if (appendTo) return el.appendTo(appendTo);
		return el;
	}
  
	var svgOuter = $('<svg width="100%" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" id="svg-outer"></svg>').appendTo('#svg-container');
	
	
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
	*/
	

	Highcharts.theme = {
  "colors": ["#6794a7", "#014d64", "#76c0c1", "#01a2d9", "#7ad2f6", "#00887d", "#adadad", "#7bd3f6", "#7c260b", "#ee8f71", "#76c0c1", "#a18376"],
  "chart": {
    "backgroundColor": 'var(--bs-light)',//'var(--bs-econlpale)',//"#d5e4eb",
    "style": {
      "fontFamily": "Assistant",
      "color": "#3C3C3C"
    },
	borderColor: '#FFFFFF',
	borderRadius: 5,
	borderWidth: 1,
	type: 'line'

  },
  "title": {
    "style": {
      "fontWeight": "bold"
    }
  },
  "subtitle": {
  },
  "yAxis": {
    "gridLineColor": "#FFFFFF",
    "lineColor": "#FFFFFF",
    "minorGridLineColor": "#FFFFFF",
    "tickColor": "#D7D7D8",
    "tickWidth": 1,
    "title": {
      "style": {
        "color": "#A0A0A3"
      }
    }
  },
  "tooltip": {
    "backgroundColor": "#FFFFFF",
    "borderColor": "#76c0c1",
    "style": {
      "color": "#000000"
    }
  },
  "legend": {
    "itemStyle": {
      "color": "#3C3C3C"
    },
    "itemHiddenStyle": {
      "color": "#606063"
    }
  },
  "credits": {
    "style": {
      "color": "#666"
    }
  },
  "labels": {
    "style": {
      "color": "#D7D7D8"
    }
  },
  "drilldown": {
    "activeAxisLabelStyle": {
      "color": "#F0F0F3"
    },
    "activeDataLabelStyle": {
      "color": "#F0F0F3"
    }
  },
  "navigation": {
    "buttonOptions": {
      "symbolStroke": "#DDDDDD",
      "theme": {
        "fill": "#505053"
      }
    }
  },
  "legendBackgroundColor": "rgba(0, 0, 0, 0.5)",
  "background2": "#505053",
  "dataLabelsColor": "#B0B0B3",
  "textColor": "#C0C0C0",
  "contrastTextColor": "#F0F0F3",
  "maskColor": "rgba(255,255,255,0.3)"  };
	// Apply the theme
	Highcharts.setOptions(Highcharts.theme);

  
});

