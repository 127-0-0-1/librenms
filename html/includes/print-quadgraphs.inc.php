<?php

  global $config;

  $graph_array['height'] = "100";
  $graph_array['width']  = "215";
  $graph_array['to']     = $now;

  $periods = array('day', 'week', 'month', 'year');

  foreach($periods as $period) {
    $graph_array['from']        = $config[$period];
    $graph_array_zoom           = $graph_array;
    $graph_array_zoom['height'] = "150";
    $graph_array_zoom['width']  = "400";

    $link = $config['base_url'] . "/graphs/" . $graph_array['id'] . "/" . $graph_array['type'] . "/" . $graph_array['from'] . "/" . $config['now'] . "/";

    echo(overlib_link($link, generate_graph_tag($graph_array), generate_graph_tag($graph_array_zoom),  NULL));
  }

?>