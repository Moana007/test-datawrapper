<?php

class DatawrapperPlugin_VisualizationTreemap extends DatawrapperPlugin {

    public function init() {

        $visMeta = array(
            /*
             * The unique visualization id (not to be confused with the plugin id)
             */
            "id" => "visualization-treemap",

            /*
             * The title displayed in the editor UI. Wrap in __() to make it
             * localizable.
             */
            "title" => "Treemap",
            "extends" => "raphael-chart",
            "order" => 70,
            "dimensions" => 1,
            "color-by" => "hierarchy",
            /*
             * Optional: libraries that are used by the visualization.
             */
            "libraries" => array(array(
                "local" => "vendor/d3.treemap.js"
            )),
            /*
             * The config options that are displayed to the user in the right sidebar
             * in the chart editor. In this case three options are defined for assigning
             * the columns to each of the axes.
             */
            "options" => array()     
        );

        DatawrapperVisualization::register($this, $visMeta);
    }

}
