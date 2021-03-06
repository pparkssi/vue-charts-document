@extends('layout.vue-layout')
@section('title', 'Vue Using vue-charts')
@section('app')
    <h1>Polar Area</h1>
    <ul>
        <li><a href="#init">Init Vue Instance</a></li>
        <li><a href="#basic">Basic Usage</a></li>
            <ul><li><a href="#default">Default Plar Area</a></li></ul>
            <ul><li><a href="#scales">Set Scales Display</a></li></ul>
            <ul><li><a href="#size">Set Hight and Width</a></li></ul>
            <ul><li><a href="#data">Set Labels and Data</a></li></ul>
            <ul><li><a href="#color">Set Color</a></li></ul>
        <li><a href="#override">Override</a></li>
            <ul><li><a href="#datasets">Override Datasets</a></li></ul>
            <ul><li><a href="#option">Override Option</a></li></ul>
    </ul>

    <h2 id="#init">Init Vue Instance</h2>
    <pre><code class="language-javascript">
{{'    <body>...</body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.js"></script>
    <script src="js/vue-charts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.0.3/vue.min.js"></script>
    <script>
        Vue.use(VueCharts);
        const app = new Vue({
            el: \'#app\'
        });
    </script>'}}
    </code></pre>

    <h2 id="basic">Basic Usage</h4>
    <h4 id="default">Default Plar Area</h4>
    <ul>
        <li>Default size :  <span class="warning">RWD</span></li>
        <li>Default data :  <span class="warning">[40, 60, 45, 70]</span></li>
        <li>Default labels :  <span class="warning">['first', 'second', 'third', 'fourth']</span></li>
    </ul>
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#native-default">Native</a></li>
        <li><a data-toggle="tab" href="#js-default">Vue JS</a></li>
    </ul>
    <div class="tab-content">
      <div id="native-default" class="tab-pane fade in active">
          <pre><code class="language-markup">{{'<chartjs-polar-area></chartjs-polar-area>'}}</code></pre>
      </div>
      <div id="js-default" class="tab-pane fade">
          <pre><code class="language-markup">{{'<chartjs-polar-area></chartjs-polar-area>'}}</code></pre>
      </div>
    </div>
    <chartjs-polar-area></chartjs-polar-area>
    <hr>

    <h4 id="scales">Set Scales Display</h4>
    <ul>
        <li>set scales display</li>
        <li>beginzero : Default = true</li>
    </ul>
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#native-scale">Native</a></li>
        <li><a data-toggle="tab" href="#js-scale">Vue JS</a></li>
    </ul>
    <div class="tab-content">
      <div id="native-scale" class="tab-pane fade in active">
          <pre><code class="language-markup">{{'<chartjs-polar-area :scalesdisplay="false"></chartjs-polar-area>'}}</code></pre>
      </div>
      <div id="js-scale" class="tab-pane fade">
          <pre><code class="language-markup">{{'<chartjs-polar-area :scalesdisplay="myboolean"></chartjs-polar-area>'}}</code></pre>
          <pre><code class="language-javascript">{{'<script>
    Vue.use(VueCharts);
    const app = new Vue({
        el: \'#app\',
        data:{
            myboolean : false,
        },
    });
 </script>'}}</code></pre>
      </div>
    </div>
    <chartjs-polar-area :scalesdisplay="false"></chartjs-polar-area>
    <hr>

    <h4 id="size">Set Hight and Width</h4>
    <ul>
        <li>RWD will <span class="error">lose efficacy</span></li>
    </ul>
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#native-size">Native</a></li>
        <li><a data-toggle="tab" href="#js-size">Vue JS</a></li>
    </ul>
    <div class="tab-content">
      <div id="native-size" class="tab-pane fade in active">
          <pre><code class="language-markup">{{'<chartjs-polar-area :width="300" :height="500"></chartjs-polar-area>'}}</code></pre>
      </div>
      <div id="js-size" class="tab-pane fade">
          <pre><code class="language-markup">{{'<chartjs-polar-area :width="mywidth" :height="myheight"></chartjs-polar-area>'}}</code></pre>
          <pre><code class="language-javascript">{{'<script>
    Vue.use(VueCharts);
    const app = new Vue({
        el: \'#app\',
        data:{
            mywidth : 300,
            myheight : 500,
        },
    });
 </script>'}}</code></pre>
      </div>
    </div>
    <chartjs-polar-area :width="300" :height="500"></chartjs-polar-area>
    <hr>

    <h4 id="data">Set Labels and Data</h4>
    <ul>
        <li>DataLabel : <span class="warning">String</span></li>
        <li>Labels : <span class="warning">Array</span></li>
        <li>Value in Labels : <span class="warning">String</span></li>
        <li>Data : <span class="warning">Array</span></li>
        <li>Value in Data : <span class="error">Number</span></li>
    </ul>
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#native-data">Native</a></li>
        <li><a data-toggle="tab" href="#js-data">Vue JS</a></li>
    </ul>
    <div class="tab-content">
      <div id="native-data" class="tab-pane fade in active">
          <pre><code class="language-markup">{{'<chartjs-polar-area :datalabel="\'TestDataLabel\'" :labels="[\'happy\',\'myhappy\',\'hello\']" :data="[100,40,60]"></chartjs-polar-area>'}}</code></pre>
      </div>
      <div id="js-data" class="tab-pane fade">
          <pre><code class="language-markup">{{'<chartjs-polar-area :datalabel="mylabel" :labels="mylabels" :data="mydata"></chartjs-polar-area>'}}</code></pre>
          <pre><code class="language-javascript">{{'<script>
    Vue.use(VueCharts);
    const app = new Vue({
        el: \'#app\',
        data:{
            mylabel : \'TestDataLabel\',
            mylabels : [\'happy\',\'myhappy\',\'hello\'],
            mydata : [100,40,60]
        },
    });
 </script>'}}</code></pre>
      </div>
    </div>
    <chartjs-polar-area :datalabel="'TestDataLabel'" :labels="['happy','myhappy','hello']" :data="[100,40,60]"></chartjs-polar-area>
    <hr>

    <h4 id="color">Set Color</h4>
    <ul>
        <li>Color support format :  <span class="warning">#00c853</span> and <span class="warning">rgba(75,192,192,0.1)</span></li>
        <li>backgroundcolor : <span class="warning">Color or Array{{'<Color>'}}</span> The fill color of the arcs.</li>
        <li>bordercolor :	<span class="warning">Color or Array{{'<Color>'}}</span> Arc border color.</li>
        <li>hoverbackgroundcolor : <span class="warning">Color or Array{{'<Color>'}}</span> Arc background color when hovered.</li>
        <li>hoverbordercolor :	<span class="warning">Color or Array{{'<Color>'}}</span> Arc border color when hovered.</li>
    </ul>
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#native-color">Native</a></li>
        <li><a data-toggle="tab" href="#js-color">Vue JS</a></li>
    </ul>
    <div class="tab-content">
      <div id="native-color" class="tab-pane fade in active">
          <pre><code class="language-markup">{{'<chartjs-polar-area
    :beginzero="true"
    :backgroundcolor="[\'rgba(75,0,192,0.1)\',\'rgba(0,88,88,0.1)\',\'rgba(75,192,0,0.1)\',\'rgba(75,192,192,0.1)\']"
    :bordercolor="[\'rgba(75,192,192,1)\',\'rgba(0,192,192,1)\',\'rgba(75,192,0,1)\',\'rgba(75,192,192,1)\']">
</chartjs-polar-area>'}}</code></pre>
      </div>
      <div id="js-color" class="tab-pane fade">
          <pre><code class="language-markup">{{'<chartjs-polar-area
    :beginzero="myboolean"
    :backgroundcolor="mybackgroundcolor"
    :bordercolor="mybordercolor">
</chartjs-polar-area>'}}</code></pre>
          <pre><code class="language-javascript">{{'<script>
    Vue.use(VueCharts);
    const app = new Vue({
        el: \'#app\',
        data:{
            mybackgroundcolor : [\'rgba(75,0,192,0.1)\',\'rgba(0,88,88,0.1)\',\'rgba(75,192,0,0.1)\',\'rgba(75,192,192,0.1)\'],
            mybordercolor : [\'rgba(75,192,192,1)\',\'rgba(0,192,192,1)\',\'rgba(75,192,0,1)\',\'rgba(75,192,192,1)\'],
            myboolean : true
        },
    });
</script>'}}</code></pre>
      </div>
    </div>
    <chartjs-polar-area :beginzero="true"
                 :backgroundcolor="['rgba(75,0,192,0.1)','rgba(0,88,88,0.1)','rgba(75,192,0,0.1)','rgba(75,192,192,0.1)']"
                 :bordercolor="['rgba(75,192,192,1)','rgba(0,192,192,1)','rgba(75,192,0,0.1)','rgba(75,192,192,1)']"></chartjs-polar-area>

    <hr>


    <h2 id="override">Override</h2>
    <h4 id="datasets">Override Datasets</h4>
    <ul>
        <li>You can override datasets</li>
        <li>About polar area datasets : Link to <a href="http://www.chartjs.org/docs/#polar-area-chart-dataset-structure">Chart.js</a></li>
    </ul>
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#js-datasets">Vue JS</a></li>
        {{-- <li><a data-toggle="tab" href="#js-datasets">Vue JS</a></li> --}}
    </ul>
    <div class="tab-content">
      <div id="js-datasets" class="tab-pane fade in active">
          <pre><code class="language-markup">{{'<chartjs-polar-area :labels="mylabels" :datasets="mydatasets"></chartjs-polar-area>'}}</code></pre>
          <pre><code class="language-javascript">{{'<script>
    Vue.use(VueCharts);
    const app = new Vue({
        el: \'#app\',
        data:{
            mylabels: ["Red", "Green", "Yellow", "Grey", "Blue"],
            mydatasets:[{
                data: [11, 16, 7, 3, 14],
                backgroundColor: [
                    "#FF6384",
                    "#4BC0C0",
                    "#FFCE56",
                    "#E7E9ED",
                    "#36A2EB"
                ],
                label: \'My dataset\' // for legend
            }]
        },
    });
</script>'}}</code></pre>
      </div>
    </div>
    <chartjs-polar-area :labels="mylabels" :datasets="mydatasets"></chartjs-polar-area>
    <hr>


    <h4 id="option">Override Option</h4>
    <ul>
        <li>You can override option</li>
        <li>About polar area option : Link to <a href="http://www.chartjs.org/docs/#polar-area-chart-chart-options">Chart.js</a></li>
    </ul>
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#js-datasets">Vue JS</a></li>
        {{-- <li><a data-toggle="tab" href="#js-datasets">Vue JS</a></li> --}}
    </ul>
    <div class="tab-content">
      <div id="js-datasets" class="tab-pane fade in active">
          <pre><code class="language-markup">{{'<chartjs-polar-area :option="myoption"></chartjs-polar-area>'}}</code></pre>
          <pre><code class="language-javascript">{{'<script>
    Vue.use(VueCharts);
    const app = new Vue({
        el: \'#app\',
        data:{
            myoption:{
                responsive:true,
                maintainAspectRatio:true,
                title: {
                    display: true,
                    position: \'bottom\',
                    text: \'Custom Chart Title\'
                }
            }
        }
    });
</script>'}}</code></pre>
      </div>
    </div>
    <chartjs-polar-area :option="myoption"></chartjs-polar-area>
    <hr>
@endsection
@section('style')
    <style>
        .success{
            color:#00c853;
            font-weight: bold;
        }
        .warning{
            color:#8e24aa;
            font-weight: bold;
        }
        .error{
            color:#e64a19;
            font-weight: bold;
        }
    </style>
@endsection
@section('script')
    <script type="text/javascript">
        Vue.use(VueCharts);
        const app = new Vue({
            el: '#app',
            data:{
                myoption:{
                    responsive:true,
                    maintainAspectRatio:true,
                    title: {
                        display: true,
                        position: 'bottom',
                        text: 'Custom Chart Title'
                    },
                },
                mylabels: ["Red", "Green", "Yellow", "Grey", "Blue"],
                mydatasets:[{
                    data: [11, 16, 7, 3, 14],
                    backgroundColor: [
                        "#FF6384",
                        "#4BC0C0",
                        "#FFCE56",
                        "#E7E9ED",
                        "#36A2EB"
                    ],
                    label: 'My dataset' // for legend
                }]
            },
        });
    </script>
@endsection
