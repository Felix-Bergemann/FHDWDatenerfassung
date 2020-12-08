Mukadi ChartJs Bundle
=================
Build awesome charts directly from ORM Entities, using `MukadiChartJsBundle` to create
high quality chart mapped directly to your data model.
`MukadiChartJsBundle` is an adaptation of the [mukadi/chartjs-builder](https://github.com/mbo2olivier/mukadi-chartjs-builder) package for symfony, Here are some provided features:

* a service for build chart from DQL queries
* a service for build chart from Native SQL queries
* a Twig extension for render chart in the view

## Installation

Install the bundle via composer by running the following command:

 `php composer.phar require mukadi/chartjs-bundle`

And run `php bin/console assets:install` for installing assets in the public web directory

## Chart builder

The bundle provide two chart builders as service:

*service* | *class* | *description*
--- | --- | ---
mukadi_chart_js.dql | Mukadi\ChartJSBundle\Chart\Builder | For building chart from a DQL query
mukadi_chart_js.native | Mukadi\ChartJSBundle\Chart\NativeBuilder | For building chart from a native SQL query

You can use chart builders like any other symfony service:

``` php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Mukadi\Chart\Utils\RandomColorFactory;
use Mukadi\ChartJSBundle\Chart\Builder
use Mukadi\Chart\Chart;

class AppController extends Controller{

    public function chart(Builder $builder) {
        $builder
            ->query('SELECT COUNT(*) total, p.type FROM \App\Entity\Post p GROUP BY p.type')
            ->addDataset('total','Total',[
                "backgroundColor" => RandomColorFactory::getRandomRGBAColors(6)
            ])
            ->labels('type')
        ;

        $chart = $builder->buildChart('my_chart',Chart::PIE);
        return $this->render('chart.html.twig',[
            "chart" => $chart,
        ]);
    }
}
```
You can also pass a Doctrine\ORM\Query object instead of a DQL query.
This allow you to use a repository to store your charts queries.

``` php
    ...
    $query = $this->getDoctrine()->getManager()->createQuery('SELECT COUNT(*) total, p.type FROM \App\Entity\Post p GROUP BY p.type');

    $builder
            ->query($query)
            ->addDataset('total','Total',[
                "backgroundColor" => RandomColorFactory::getRandomRGBAColors(6)
            ])
            ->labels('type')
        ;
...
```
Please, see the [mukadi/chartjs-builder documentation](https://github.com/mbo2olivier/mukadi-chartjs-builder) if you want to learn more about chart construction.

## Render chart in twig template

In twig template use the dedicated function for chart rendering:

``` jinja
{{ mukadi_chart(chart) }}
```
Don't forget to include libraries in your page:

``` html
<script src="/bundles/mukadichartjs/Chart.bundle.min.js"></script>
<script src="/bundles/mukadichartjs/mukadi.chart.min.js"></script>

```
And that's all !