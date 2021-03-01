<?php

namespace App\Http\Controllers;

use App\CategoryModel;
use App\Models\AnimalsModel;
use App\ProblemModel;
use App\ProblemReasonModel;
use App\ProblemResultModel;
use App\ProblemSolutionModel;
use App\ProblemCategoryModel;
use App\ProblemSubjectModel;
use App\SolutionModel;
use App\SolutionSourceModel;
use App\SourceModel;
use App\SubjectModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Object_;

class ShowController extends Controller
{
    function index()
    {
        $data["data"] = null;
        return view('show', $data);
    }

    function getAnimalReportWithDate(Request $request)
    {
        $month = $request->month;
        $year = $request->year;
        $now = Carbon::now();
        if ($month == $now->month && $year == $now->year) {
            $a = DB::table("animals_models as a")->
            join('categories as c', 'c.id', '=', 'a.category_id')
                ->join('food_category_models as fc', 'c.id', '=', 'fc.category_id')
                ->join('foods_models as f', 'fc.food_id', '=', 'f.id')
                ->Select("c.name as name", "c.weight_rate as weight_rate")
                ->WhereMonth("fc.date",$month)
                ->whereYear("fc.date",$year)
                ->GroupBy("c.id", "c.name", "c.weight_rate", "c.sell_price")
                ->SelectRaw("SUM(f.price * fc.count)  as TotalPrice")
                ->SelectRaw("count(*) as animalCount")
                ->Where("activity_id", 1)
                ->get();
        } else {
            $a = DB::table("animals_models as a")->
            join('categories as c', 'c.id', '=', 'a.category_id')
                ->join('food_category_models as fc', 'c.id', '=', 'fc.category_id')
                ->join('foods_models as f', 'fc.food_id', '=', 'f.id')
                ->Select("c.name as name", "c.weight_rate as weight_rate")
                ->WhereMonth("fc.date",$month)
                ->whereYear("fc.date",$year)
                ->GroupBy("c.id", "c.name", "c.weight_rate", "c.sell_price")
                ->SelectRaw("SUM(f.price * fc.count)  as TotalPrice")
                ->SelectRaw("count(*) as animalCount")
                ->Where("activity_id", 1)
                ->get();
        }

        return $a;


    }

}
