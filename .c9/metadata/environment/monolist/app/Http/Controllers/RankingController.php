{"filter":false,"title":"RankingController.php","tooltip":"/monolist/app/Http/Controllers/RankingController.php","undoManager":{"mark":76,"position":76,"stack":[[{"start":{"row":8,"column":0},"end":{"row":16,"column":4},"action":"remove","lines":["    public function want()","    {","        $items = \\DB::table('item_user')->join('items', 'item_user.item_id', '=', 'items.id')->select('items.*', \\DB::raw('COUNT(*) as count'))->where('type', 'want')->groupBy('items.id', 'items.code', 'items.name', 'items.url', 'items.image_url','items.created_at', 'items.updated_at')->orderBy('count', 'DESC')->take(10)->get();","","        return view('ranking.want', [","            'items' => $items,","        ]);","    }","    "],"id":2}],[{"start":{"row":12,"column":163},"end":{"row":12,"column":164},"action":"remove","lines":["t"],"id":3},{"start":{"row":12,"column":162},"end":{"row":12,"column":163},"action":"remove","lines":["n"]},{"start":{"row":12,"column":161},"end":{"row":12,"column":162},"action":"remove","lines":["a"]},{"start":{"row":12,"column":160},"end":{"row":12,"column":161},"action":"remove","lines":["w"]}],[{"start":{"row":12,"column":160},"end":{"row":12,"column":161},"action":"insert","lines":["h"],"id":4},{"start":{"row":12,"column":161},"end":{"row":12,"column":162},"action":"insert","lines":["a"]},{"start":{"row":12,"column":162},"end":{"row":12,"column":163},"action":"insert","lines":["v"]},{"start":{"row":12,"column":163},"end":{"row":12,"column":164},"action":"insert","lines":["e"]}],[{"start":{"row":8,"column":0},"end":{"row":15,"column":5},"action":"insert","lines":["    public function have()","    {","        $items = \\DB::table('item_user')->join('items', 'item_user.item_id', '=', 'items.id')->select('items.*', \\DB::raw('COUNT(*) as count'))->where('type', 'have')->groupBy('items.id', 'items.code', 'items.name', 'items.url', 'items.image_url','items.created_at', 'items.updated_at')->orderBy('count', 'DESC')->take(10)->get();","","        return view('ranking.have', [","            'items' => $items,","        ]);","    }"],"id":5}],[{"start":{"row":17,"column":23},"end":{"row":17,"column":24},"action":"remove","lines":["e"],"id":6},{"start":{"row":17,"column":22},"end":{"row":17,"column":23},"action":"remove","lines":["v"]},{"start":{"row":17,"column":21},"end":{"row":17,"column":22},"action":"remove","lines":["a"]},{"start":{"row":17,"column":20},"end":{"row":17,"column":21},"action":"remove","lines":["h"]}],[{"start":{"row":17,"column":20},"end":{"row":17,"column":21},"action":"insert","lines":["w"],"id":7},{"start":{"row":17,"column":21},"end":{"row":17,"column":22},"action":"insert","lines":["a"]},{"start":{"row":17,"column":22},"end":{"row":17,"column":23},"action":"insert","lines":["n"]},{"start":{"row":17,"column":23},"end":{"row":17,"column":24},"action":"insert","lines":["t"]}],[{"start":{"row":19,"column":163},"end":{"row":19,"column":164},"action":"remove","lines":["e"],"id":8},{"start":{"row":19,"column":162},"end":{"row":19,"column":163},"action":"remove","lines":["v"]},{"start":{"row":19,"column":161},"end":{"row":19,"column":162},"action":"remove","lines":["a"]},{"start":{"row":19,"column":160},"end":{"row":19,"column":161},"action":"remove","lines":["h"]}],[{"start":{"row":19,"column":160},"end":{"row":19,"column":161},"action":"insert","lines":["w"],"id":9},{"start":{"row":19,"column":161},"end":{"row":19,"column":162},"action":"insert","lines":["a"]},{"start":{"row":19,"column":162},"end":{"row":19,"column":163},"action":"insert","lines":["n"]},{"start":{"row":19,"column":163},"end":{"row":19,"column":164},"action":"insert","lines":["t"]}],[{"start":{"row":21,"column":32},"end":{"row":21,"column":33},"action":"remove","lines":["e"],"id":10},{"start":{"row":21,"column":31},"end":{"row":21,"column":32},"action":"remove","lines":["v"]},{"start":{"row":21,"column":30},"end":{"row":21,"column":31},"action":"remove","lines":["a"]},{"start":{"row":21,"column":29},"end":{"row":21,"column":30},"action":"remove","lines":["h"]}],[{"start":{"row":21,"column":29},"end":{"row":21,"column":30},"action":"insert","lines":["w"],"id":11},{"start":{"row":21,"column":30},"end":{"row":21,"column":31},"action":"insert","lines":["a"]},{"start":{"row":21,"column":31},"end":{"row":21,"column":32},"action":"insert","lines":["n"]},{"start":{"row":21,"column":32},"end":{"row":21,"column":33},"action":"insert","lines":["t"]}],[{"start":{"row":13,"column":30},"end":{"row":14,"column":0},"action":"insert","lines":["",""],"id":12},{"start":{"row":14,"column":0},"end":{"row":14,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":14,"column":12},"end":{"row":14,"column":14},"action":"insert","lines":["\"\""],"id":13}],[{"start":{"row":14,"column":12},"end":{"row":14,"column":14},"action":"remove","lines":["\"\""],"id":14}],[{"start":{"row":14,"column":12},"end":{"row":14,"column":14},"action":"insert","lines":["''"],"id":15}],[{"start":{"row":14,"column":13},"end":{"row":14,"column":14},"action":"insert","lines":["t"],"id":16},{"start":{"row":14,"column":14},"end":{"row":14,"column":15},"action":"insert","lines":["y"]},{"start":{"row":14,"column":15},"end":{"row":14,"column":16},"action":"insert","lines":["p"]},{"start":{"row":14,"column":16},"end":{"row":14,"column":17},"action":"insert","lines":["e"]},{"start":{"row":14,"column":17},"end":{"row":14,"column":18},"action":"insert","lines":["s"]}],[{"start":{"row":14,"column":19},"end":{"row":14,"column":20},"action":"insert","lines":[" "],"id":17},{"start":{"row":14,"column":20},"end":{"row":14,"column":21},"action":"insert","lines":["="]},{"start":{"row":14,"column":21},"end":{"row":14,"column":22},"action":"insert","lines":[">"]}],[{"start":{"row":14,"column":22},"end":{"row":14,"column":23},"action":"insert","lines":[" "],"id":18},{"start":{"row":14,"column":23},"end":{"row":14,"column":24},"action":"insert","lines":["$"]}],[{"start":{"row":14,"column":24},"end":{"row":14,"column":25},"action":"insert","lines":["h"],"id":19},{"start":{"row":14,"column":25},"end":{"row":14,"column":26},"action":"insert","lines":["a"]},{"start":{"row":14,"column":26},"end":{"row":14,"column":27},"action":"insert","lines":["v"]},{"start":{"row":14,"column":27},"end":{"row":14,"column":28},"action":"insert","lines":["e"]}],[{"start":{"row":14,"column":27},"end":{"row":14,"column":28},"action":"remove","lines":["e"],"id":20},{"start":{"row":14,"column":26},"end":{"row":14,"column":27},"action":"remove","lines":["v"]}],[{"start":{"row":14,"column":26},"end":{"row":14,"column":27},"action":"insert","lines":["v"],"id":21},{"start":{"row":14,"column":27},"end":{"row":14,"column":28},"action":"insert","lines":["e"]}],[{"start":{"row":14,"column":28},"end":{"row":14,"column":29},"action":"insert","lines":["'"],"id":22}],[{"start":{"row":14,"column":28},"end":{"row":14,"column":29},"action":"remove","lines":["'"],"id":23}],[{"start":{"row":14,"column":28},"end":{"row":14,"column":29},"action":"insert","lines":["'"],"id":24}],[{"start":{"row":14,"column":28},"end":{"row":14,"column":29},"action":"remove","lines":["'"],"id":25}],[{"start":{"row":14,"column":28},"end":{"row":14,"column":29},"action":"insert","lines":[","],"id":26}],[{"start":{"row":23,"column":30},"end":{"row":24,"column":0},"action":"insert","lines":["",""],"id":27},{"start":{"row":24,"column":0},"end":{"row":24,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":24,"column":12},"end":{"row":24,"column":14},"action":"insert","lines":["''"],"id":28}],[{"start":{"row":24,"column":13},"end":{"row":24,"column":14},"action":"insert","lines":["t"],"id":29},{"start":{"row":24,"column":14},"end":{"row":24,"column":15},"action":"insert","lines":["y"]},{"start":{"row":24,"column":15},"end":{"row":24,"column":16},"action":"insert","lines":["p"]},{"start":{"row":24,"column":16},"end":{"row":24,"column":17},"action":"insert","lines":["e"]},{"start":{"row":24,"column":17},"end":{"row":24,"column":18},"action":"insert","lines":["s"]}],[{"start":{"row":24,"column":19},"end":{"row":24,"column":20},"action":"insert","lines":[" "],"id":30},{"start":{"row":24,"column":20},"end":{"row":24,"column":21},"action":"insert","lines":["="]}],[{"start":{"row":24,"column":21},"end":{"row":24,"column":22},"action":"insert","lines":[" "],"id":31}],[{"start":{"row":24,"column":21},"end":{"row":24,"column":22},"action":"remove","lines":[" "],"id":32}],[{"start":{"row":24,"column":21},"end":{"row":24,"column":22},"action":"insert","lines":[">"],"id":33}],[{"start":{"row":24,"column":22},"end":{"row":24,"column":23},"action":"insert","lines":[" "],"id":34}],[{"start":{"row":24,"column":23},"end":{"row":24,"column":24},"action":"insert","lines":["$"],"id":35}],[{"start":{"row":24,"column":24},"end":{"row":24,"column":25},"action":"insert","lines":["w"],"id":36},{"start":{"row":24,"column":25},"end":{"row":24,"column":26},"action":"insert","lines":["a"]},{"start":{"row":24,"column":26},"end":{"row":24,"column":27},"action":"insert","lines":["n"]},{"start":{"row":24,"column":27},"end":{"row":24,"column":28},"action":"insert","lines":["t"]},{"start":{"row":24,"column":28},"end":{"row":24,"column":29},"action":"insert","lines":[","]}],[{"start":{"row":24,"column":0},"end":{"row":24,"column":29},"action":"remove","lines":["            'types' => $want,"],"id":37},{"start":{"row":23,"column":30},"end":{"row":24,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":14,"column":0},"end":{"row":14,"column":29},"action":"remove","lines":["            'types' => $have,"],"id":38},{"start":{"row":13,"column":30},"end":{"row":14,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":11,"column":0},"end":{"row":12,"column":0},"action":"insert","lines":["",""],"id":39}],[{"start":{"row":21,"column":0},"end":{"row":22,"column":0},"action":"insert","lines":["",""],"id":40}],[{"start":{"row":11,"column":0},"end":{"row":11,"column":4},"action":"insert","lines":["    "],"id":41}],[{"start":{"row":11,"column":4},"end":{"row":11,"column":8},"action":"insert","lines":["    "],"id":42}],[{"start":{"row":11,"column":8},"end":{"row":11,"column":9},"action":"insert","lines":["$"],"id":43},{"start":{"row":11,"column":9},"end":{"row":11,"column":10},"action":"insert","lines":["t"]},{"start":{"row":11,"column":10},"end":{"row":11,"column":11},"action":"insert","lines":["y"]}],[{"start":{"row":11,"column":11},"end":{"row":11,"column":12},"action":"insert","lines":["p"],"id":44},{"start":{"row":11,"column":12},"end":{"row":11,"column":13},"action":"insert","lines":["e"]},{"start":{"row":11,"column":13},"end":{"row":11,"column":14},"action":"insert","lines":["s"]}],[{"start":{"row":11,"column":14},"end":{"row":11,"column":15},"action":"insert","lines":[" "],"id":45},{"start":{"row":11,"column":15},"end":{"row":11,"column":16},"action":"insert","lines":["="]}],[{"start":{"row":11,"column":16},"end":{"row":11,"column":17},"action":"insert","lines":[" "],"id":46},{"start":{"row":11,"column":17},"end":{"row":11,"column":18},"action":"insert","lines":["h"]},{"start":{"row":11,"column":18},"end":{"row":11,"column":19},"action":"insert","lines":["a"]},{"start":{"row":11,"column":19},"end":{"row":11,"column":20},"action":"insert","lines":["v"]},{"start":{"row":11,"column":20},"end":{"row":11,"column":21},"action":"insert","lines":["e"]}],[{"start":{"row":11,"column":20},"end":{"row":11,"column":21},"action":"remove","lines":["e"],"id":47},{"start":{"row":11,"column":19},"end":{"row":11,"column":20},"action":"remove","lines":["v"]},{"start":{"row":11,"column":18},"end":{"row":11,"column":19},"action":"remove","lines":["a"]},{"start":{"row":11,"column":17},"end":{"row":11,"column":18},"action":"remove","lines":["h"]}],[{"start":{"row":11,"column":17},"end":{"row":11,"column":19},"action":"insert","lines":["''"],"id":48}],[{"start":{"row":11,"column":18},"end":{"row":11,"column":19},"action":"insert","lines":["h"],"id":49},{"start":{"row":11,"column":19},"end":{"row":11,"column":20},"action":"insert","lines":["a"]},{"start":{"row":11,"column":20},"end":{"row":11,"column":21},"action":"insert","lines":["v"]},{"start":{"row":11,"column":21},"end":{"row":11,"column":22},"action":"insert","lines":["e"]}],[{"start":{"row":11,"column":23},"end":{"row":11,"column":24},"action":"insert","lines":[";"],"id":50}],[{"start":{"row":21,"column":0},"end":{"row":21,"column":4},"action":"insert","lines":["    "],"id":51}],[{"start":{"row":21,"column":4},"end":{"row":21,"column":8},"action":"insert","lines":["    "],"id":52}],[{"start":{"row":21,"column":8},"end":{"row":21,"column":9},"action":"insert","lines":["$"],"id":53},{"start":{"row":21,"column":9},"end":{"row":21,"column":10},"action":"insert","lines":["t"]},{"start":{"row":21,"column":10},"end":{"row":21,"column":11},"action":"insert","lines":["y"]},{"start":{"row":21,"column":11},"end":{"row":21,"column":12},"action":"insert","lines":["p"]},{"start":{"row":21,"column":12},"end":{"row":21,"column":13},"action":"insert","lines":["e"]}],[{"start":{"row":21,"column":13},"end":{"row":21,"column":14},"action":"insert","lines":["s"],"id":54}],[{"start":{"row":21,"column":14},"end":{"row":21,"column":15},"action":"insert","lines":[" "],"id":55},{"start":{"row":21,"column":15},"end":{"row":21,"column":16},"action":"insert","lines":["="]}],[{"start":{"row":21,"column":16},"end":{"row":21,"column":17},"action":"insert","lines":[" "],"id":56}],[{"start":{"row":21,"column":17},"end":{"row":21,"column":19},"action":"insert","lines":["''"],"id":57}],[{"start":{"row":21,"column":18},"end":{"row":21,"column":19},"action":"insert","lines":["w"],"id":58},{"start":{"row":21,"column":19},"end":{"row":21,"column":20},"action":"insert","lines":["a"]},{"start":{"row":21,"column":20},"end":{"row":21,"column":21},"action":"insert","lines":["n"]},{"start":{"row":21,"column":21},"end":{"row":21,"column":22},"action":"insert","lines":["t"]}],[{"start":{"row":21,"column":23},"end":{"row":21,"column":24},"action":"insert","lines":[";"],"id":59}],[{"start":{"row":14,"column":30},"end":{"row":15,"column":0},"action":"insert","lines":["",""],"id":60},{"start":{"row":15,"column":0},"end":{"row":15,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":15,"column":12},"end":{"row":15,"column":14},"action":"insert","lines":["''"],"id":61}],[{"start":{"row":15,"column":13},"end":{"row":15,"column":14},"action":"insert","lines":["t"],"id":62},{"start":{"row":15,"column":14},"end":{"row":15,"column":15},"action":"insert","lines":["y"]},{"start":{"row":15,"column":15},"end":{"row":15,"column":16},"action":"insert","lines":["p"]},{"start":{"row":15,"column":16},"end":{"row":15,"column":17},"action":"insert","lines":["e"]},{"start":{"row":15,"column":17},"end":{"row":15,"column":18},"action":"insert","lines":["s"]}],[{"start":{"row":15,"column":19},"end":{"row":15,"column":20},"action":"insert","lines":[" "],"id":63},{"start":{"row":15,"column":20},"end":{"row":15,"column":21},"action":"insert","lines":["="]},{"start":{"row":15,"column":21},"end":{"row":15,"column":22},"action":"insert","lines":[">"]}],[{"start":{"row":15,"column":22},"end":{"row":15,"column":23},"action":"insert","lines":[" "],"id":64},{"start":{"row":15,"column":23},"end":{"row":15,"column":24},"action":"insert","lines":["$"]},{"start":{"row":15,"column":24},"end":{"row":15,"column":25},"action":"insert","lines":["t"]}],[{"start":{"row":15,"column":25},"end":{"row":15,"column":26},"action":"insert","lines":["y"],"id":65},{"start":{"row":15,"column":26},"end":{"row":15,"column":27},"action":"insert","lines":["p"]},{"start":{"row":15,"column":27},"end":{"row":15,"column":28},"action":"insert","lines":["e"]},{"start":{"row":15,"column":28},"end":{"row":15,"column":29},"action":"insert","lines":["s"]}],[{"start":{"row":15,"column":29},"end":{"row":15,"column":30},"action":"insert","lines":[","],"id":66}],[{"start":{"row":25,"column":30},"end":{"row":26,"column":0},"action":"insert","lines":["",""],"id":67},{"start":{"row":26,"column":0},"end":{"row":26,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":26,"column":12},"end":{"row":26,"column":14},"action":"insert","lines":["''"],"id":68}],[{"start":{"row":26,"column":13},"end":{"row":26,"column":14},"action":"insert","lines":["t"],"id":69},{"start":{"row":26,"column":14},"end":{"row":26,"column":15},"action":"insert","lines":["y"]},{"start":{"row":26,"column":15},"end":{"row":26,"column":16},"action":"insert","lines":["p"]},{"start":{"row":26,"column":16},"end":{"row":26,"column":17},"action":"insert","lines":["e"]},{"start":{"row":26,"column":17},"end":{"row":26,"column":18},"action":"insert","lines":["s"]}],[{"start":{"row":27,"column":0},"end":{"row":27,"column":1},"action":"insert","lines":["="],"id":70},{"start":{"row":27,"column":1},"end":{"row":27,"column":2},"action":"insert","lines":[">"]}],[{"start":{"row":27,"column":2},"end":{"row":27,"column":3},"action":"insert","lines":[" "],"id":71}],[{"start":{"row":27,"column":2},"end":{"row":27,"column":3},"action":"remove","lines":[" "],"id":72},{"start":{"row":27,"column":1},"end":{"row":27,"column":2},"action":"remove","lines":[">"]},{"start":{"row":27,"column":0},"end":{"row":27,"column":1},"action":"remove","lines":["="]},{"start":{"row":26,"column":19},"end":{"row":27,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":26,"column":19},"end":{"row":26,"column":20},"action":"insert","lines":[" "],"id":73},{"start":{"row":26,"column":20},"end":{"row":26,"column":21},"action":"insert","lines":["="]},{"start":{"row":26,"column":21},"end":{"row":26,"column":22},"action":"insert","lines":[">"]}],[{"start":{"row":26,"column":22},"end":{"row":26,"column":23},"action":"insert","lines":[" "],"id":74},{"start":{"row":26,"column":23},"end":{"row":26,"column":24},"action":"insert","lines":["$"]},{"start":{"row":26,"column":24},"end":{"row":26,"column":25},"action":"insert","lines":["t"]},{"start":{"row":26,"column":25},"end":{"row":26,"column":26},"action":"insert","lines":["y"]}],[{"start":{"row":26,"column":26},"end":{"row":26,"column":27},"action":"insert","lines":["p"],"id":75},{"start":{"row":26,"column":27},"end":{"row":26,"column":28},"action":"insert","lines":["e"]},{"start":{"row":26,"column":28},"end":{"row":26,"column":29},"action":"insert","lines":["s"]}],[{"start":{"row":26,"column":29},"end":{"row":26,"column":30},"action":"insert","lines":[","],"id":76}],[{"start":{"row":26,"column":30},"end":{"row":26,"column":38},"action":"remove","lines":["        "],"id":77},{"start":{"row":26,"column":30},"end":{"row":27,"column":0},"action":"insert","lines":["",""]},{"start":{"row":27,"column":0},"end":{"row":27,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":27,"column":8},"end":{"row":27,"column":12},"action":"remove","lines":["    "],"id":78}]]},"ace":{"folds":[],"scrolltop":122.5,"scrollleft":0,"selection":{"start":{"row":27,"column":8},"end":{"row":27,"column":8},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":6,"state":"php-start","mode":"ace/mode/php"}},"hash":"862e01282dcb8d66a117498012cc74a4f77384d4","timestamp":1529643656863}