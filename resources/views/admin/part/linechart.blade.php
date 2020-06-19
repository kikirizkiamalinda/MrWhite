<script>
window.onload = function () {

var options = {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: ""
	},
	axisX:{
		valueFormatString: "DD MMM"
	},
	axisY: {
		title: "Number of Sales",
		suffix: "K",
		minimum: 30
	},
	toolTip:{
		shared:true
	},
	legend:{
		cursor:"pointer",
		verticalAlign: "bottom",
		horizontalAlign: "left",
		dockInsidePlotArea: true,
		itemclick: toogleDataSeries
	},
	data: [{
		type: "line",
		showInLegend: true,
		name: "Target Penjualan",
		markerType: "square",
		xValueFormatString: "DD MMM, YYYY",
		color: "#F08080",
		yValueFormatString: "#,##0K",
		dataPoints: [
			{ x: new Date(2018, 07, 1), y: 63 },
			{ x: new Date(2018, 07, 2), y: 69 },
			{ x: new Date(2018, 07, 3), y: 65 },
			{ x: new Date(2018, 07, 4), y: 70 },
			{ x: new Date(2018, 07, 5), y: 71 },
			{ x: new Date(2018, 07, 6), y: 65 },
			{ x: new Date(2018, 07, 7), y: 73 },
			{ x: new Date(2018, 07, 8), y: 96 },
			{ x: new Date(2018, 07, 9), y: 84 },
			{ x: new Date(2018, 07, 10), y: 85 },
			{ x: new Date(2018, 07, 11), y: 86 },
			{ x: new Date(2018, 07, 12), y: 94 },
			{ x: new Date(2018, 07, 13), y: 97 },
			{ x: new Date(2018, 07, 14), y: 86 },
			{ x: new Date(2018, 07, 15), y: 89 }
		]
	},
	{
		type: "line",
		showInLegend: true,
		name: "Pencapaian Penjualan",
		lineDashType: "dash",
		yValueFormatString: "#,##0K",
		dataPoints: [
			{ x: new Date(2018, 07, 1), y: 60 },
			{ x: new Date(2018, 07, 2), y: 57 },
			{ x: new Date(2018, 07, 3), y: 51 },
			{ x: new Date(2018, 07, 4), y: 56 },
			{ x: new Date(2018, 07, 5), y: 54 },
			{ x: new Date(2018, 07, 6), y: 55 },
			{ x: new Date(2018, 07, 7), y: 54 },
			{ x: new Date(2018, 07, 8), y: 69 },
			{ x: new Date(2018, 07, 9), y: 65 },
			{ x: new Date(2018, 07, 10), y: 66 },
			{ x: new Date(2018, 07, 11), y: 63 },
			{ x: new Date(2018, 07, 12), y: 67 },
			{ x: new Date(2018, 07, 13), y: 66 },
			{ x: new Date(2018, 07, 14), y: 56 },
			{ x: new Date(2018, 07, 15), y: 64 }
		]
	}]
};
$("#chart").CanvasJSChart(options);

function toogleDataSeries(e){
	if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
		e.dataSeries.visible = false;
	} else{
		e.dataSeries.visible = true;
	}
	e.chart.render();
}

}
</script>
<div id="chart" style="height: 300px; width: 100%;"></div>
