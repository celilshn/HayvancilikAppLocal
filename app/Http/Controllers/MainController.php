<?php

namespace App\Http\Controllers;

use App\Models\ActivitiesModel;
use App\Models\AnimalDeathModel;
use App\Models\AnimalMonthModel;
use App\Models\AnimalSell;
use App\Models\AnimalsModel;
use App\Models\Categories;
use App\Models\CategoryMonthModel;
use App\Models\CompanyExpenseModel;
use App\Models\ExpenseMonthModel;
use App\Models\FoodCategoryModel;
use App\Models\FoodsModel;
use App\Models\MeatPriceModel;
use App\Models\MilkPriceModel;
use App\Models\SeminationModel;
use App\Models\TableModel;
use App\Models\UserModel;
use App\Models\VaccineAnimalModel;
use App\Models\VaccineModel;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MainController extends Controller
{

    function index(){
        $data["a"]= "a";
        UserModel::where('company_id',1)->where('sequence_id',1)->delete();
        return view('main_view',$data);
    }
    function  deleteActivities(Request $request)
    {
        return ActivitiesModel::where('company_id',$request->company_id)->where('sequence_id',$request->sequence_id)->delete();
    }
    function updateActivities(Request $request)
    {
        $models = $request->models;
        $company_id = $request->company_id;
        $sequence_id = $request->sequence_id;
        $count = 0;
        foreach ($models as $m)
        {
        $model = new ActivitiesModel();
        $model->name =$m["name"];
        $model->id =$m["id"];
        $model->company_id = $company_id;
        $model->sequence_id = $sequence_id;
        if ($model->save())
            $count++;
        }
        return $count;
    }

    function  deleteAnimalDeath(Request $request)
    {
        return AnimalDeathModel::where('company_id',$request->company_id)->where('sequence_id',$request->sequence_id)->delete();
    }
    function updateAnimalDeath(Request $request)
    {
        $models = $request->models;
        $company_id = $request->company_id;
        $sequence_id = $request->sequence_id;
        $count = 0;


        foreach ($models as $m)
        {
        $model = new AnimalDeathModel();
        $model->id =$m['id'];
        $model->animal_id =$m['animal_id'];
        $model->reason =$m['reason'];
        $model->price =$m['price'];
        $model->date =$m['date'];
        $model->company_id = $company_id;
        $model->sequence_id = $sequence_id;
            if ($model->save())
                $count++;
        }
        return $count;
    }
    function  deleteAnimalMonth(Request $request)
    {
        return AnimalMonthModel::where('company_id',$request->company_id)->where('sequence_id',$request->sequence_id)->delete();
    }
    function updateAnimalMonth(Request $request)
    {
        $models = $request->models;
        $company_id = $request->company_id;
        $sequence_id = $request->sequence_id;
        $count = 0;


        foreach ($models as $m)
        {
        $model = new AnimalMonthModel();
        $model->id =$m['id'];
        $model->name =$m['name'];
        $model->animal_id =$m['animal_id'];;
        $model->category_id =$m['category_id'];
        $model->activity_id =$m['activity_id'];;
        $model->number =$m['number'];
        $model->birth_day =$m['birth_day'];;
        $model->date = $m['date'];
        $model->company_id = $company_id;
        $model->sequence_id = $sequence_id;
        if ($model->save())
            $count++;
    }
return $count;
    }
    function  deleteAnimals(Request $request)
    {
        return AnimalsModel::where('company_id',$request->company_id)->where('sequence_id',$request->sequence_id)->delete();
    }
    function updateAnimals(Request $request)
    {
        $models = $request->models;
        $company_id = $request->company_id;
        $sequence_id = $request->sequence_id;
        $count = 0;



        foreach ($models as $m)
        {
            $model = new AnimalsModel();
            $model->id =$m['id'];
            $model->name =$m['name'];
            $model->category_id =$m['category_id'];
            $model->activity_id =$m['activity_id'];
            $model->number =$m['number'];
            $model->birth_day =$m['birth_day'];
            $model->created_at =$m['created_at'];
            $model->company_id = $company_id;
            $model->sequence_id = $sequence_id;
            if ($model->save())
                $count++;
        }
        return $count;

    }
    function  deleteAnimalSell(Request $request)
    {
        return AnimalSell::where('company_id',$request->company_id)->where('sequence_id',$request->sequence_id)->delete();
    }
    function updateAnimalSell(Request $request)
    {
        $models = $request->models;
        $company_id = $request->company_id;
        $sequence_id = $request->sequence_id;
        $count = 0;

        foreach ($models as $m)
        {
        $model = new AnimalSell();
        $model->id =$m['id'];
        $model->animal_id =$m['animal_id'];;
        $model->user_id =$m['user_id'];;
        $model->self_price =$m['self_price'];
        $model->count =$m['count'];
        $model->reason =$m['reason'];;
        $model->date = $m['date'];
        $model->company_id = $company_id;
        $model->sequence_id = $sequence_id;
            if ($model->save())
                $count++;
        }
        return $count;
    }
    function  deleteCategories(Request $request)
    {
        return Categories::where('company_id',$request->company_id)->where('sequence_id',$request->sequence_id)->delete();
    }
    function updateCategories(Request $request)
    {
        $models = $request->models;
        $company_id = $request->company_id;
        $sequence_id = $request->sequence_id;
        $count = 0;

        foreach ($models as $m)
        {
        $model = new Categories();
        $model->id =$m['id'];
        $model->name =$m['name'];
        $model->weight_rate =$m['weight_rate'];
            $model->milkable =$m['milkable'];
            $model->gender =$m['gender'];
        $model->milk_count =$m['milk_count'];
        $model->sell_price =$m['sell_price'];
        $model->company_id = $company_id;
        $model->sequence_id = $sequence_id;
            if ($model->save())
                $count++;
        }
        return $count;
    }
    function  deleteCategoryMonth(Request $request)
    {
        return CategoryMonthModel::where('company_id',$request->company_id)->where('sequence_id',$request->sequence_id)->delete();
    }
    function updateCategoryMonth(Request $request)
    {
        $models = $request->models;
        $company_id = $request->company_id;
        $sequence_id = $request->sequence_id;
        $count = 0;

        foreach ($models as $m)
        {
        $model = new CategoryMonthModel();
        $model->id =$m['id'];
        $model->category_id =$m['category_id'];
        $model->name =$m['name'];
        $model->weight_rate =$m['weight_rate'];
        $model->milkable =$m['milkable'];
            $model->gender =$m['gender'];
            $model->milk_count =$m['milk_count'];
        $model->sell_price =$m['sell_price'];
        $model->date =$m['date'];
        $model->company_id = $company_id;
        $model->sequence_id = $sequence_id;
            if ($model->save())
                $count++;
        }
        return $count;
    }
    function  deleteCompanyExpense(Request $request)
    {
        return CompanyExpenseModel::where('company_id',$request->company_id)->where('sequence_id',$request->sequence_id)->delete();
    }
    function updateCompanyExpense(Request $request)
    {
        $models = $request->models;
        $company_id = $request->company_id;
        $sequence_id = $request->sequence_id;
        $count = 0;

        foreach ($models as $m)
        {
        $model = new CompanyExpenseModel();
        $model->id =$m['id'];
        $model->name =$m['name'];
        $model->company_id = $company_id;
        $model->sequence_id = $sequence_id;
            if ($model->save())
                $count++;
        }
        return $count;
    }
    function  deleteExpenseMonth(Request $request)
    {
        return ExpenseMonthModel::where('company_id',$request->company_id)->where('sequence_id',$request->sequence_id)->delete();

    }
    function updateExpenseMonth(Request $request)
    {
        $models = $request->models;
        $company_id = $request->company_id;
        $sequence_id = $request->sequence_id;
        $count = 0;

        foreach ($models as $m)
        {
        $model = new ExpenseMonthModel();
        $model->id =$m['id'];
        $model->company_expense_id =$m['company_expense_id'];
        $model->count =$m['count'];
        $model->date =$m['date'];
        $model->company_id = $company_id;
        $model->sequence_id = $sequence_id;
            if ($model->save())
                $count++;
        }
        return $count;
    }
    function  deleteFoodCategory(Request $request)
    {
        return FoodCategoryModel::where('company_id',$request->company_id)->where('sequence_id',$request->sequence_id)->delete();
    }
    function updateFoodCategory(Request $request)
    {
        $models = $request->models;
        $company_id = $request->company_id;
        $sequence_id = $request->sequence_id;
        $count = 0;

        foreach ($models as $m)
        {
        $model = new FoodCategoryModel();
        $model->id =$m['id'];
        $model->food_id =$m['food_id'];
        $model->category_id =$m['category_id'];
        $model->count =$m['count'];
        $model->date =$m['date'];
        $model->company_id = $company_id;
        $model->sequence_id = $sequence_id;
            if ($model->save())
                $count++;
        }
        return $count;
    }
    function  deleteFoods(Request $request)
    {
        return FoodsModel::where('company_id',$request->company_id)->where('sequence_id',$request->sequence_id)->delete();
    }
    function updateFoods(Request $request)
    {
        $models = $request->models;
        $company_id = $request->company_id;
        $sequence_id = $request->sequence_id;
        $count = 0;
        foreach ($models as $m)
        {

        $model = new FoodsModel();
        $model->id =$m['id'];
        $model->name =$m['name'];
        $model->price =$m['price'];;
        $model->company_id = $company_id;
        $model->sequence_id = $sequence_id;
            if ($model->save())
                $count++;
        }
        return $count;
    }
    function  deleteMeatPrice(Request $request)
    {
        return MeatPriceModel::where('company_id',$request->company_id)->where('sequence_id',$request->sequence_id)->delete();
    }
    function updateMeatPrice(Request $request)
    {
        $models = $request->models;
        $company_id = $request->company_id;
        $sequence_id = $request->sequence_id;
        $count = 0;

        foreach ($models as $m)
        {
        $model = new MeatPriceModel();
        $model->id =$m['id'];
        $model->price =$m['price'];;
        $model->date =$m['date'];
        $model->company_id = $company_id;
        $model->sequence_id = $sequence_id;
            if ($model->save())
                $count++;
        }
        return $count;
    }
    function  deleteMilkPrice(Request $request)
    {
        return MilkPriceModel::where('company_id',$request->company_id)->where('sequence_id',$request->sequence_id)->delete();
    }
    function updateMilkPrice(Request $request)
    {
        $models = $request->models;
        $company_id = $request->company_id;
        $sequence_id = $request->sequence_id;
        $count = 0;

        foreach ($models as $m)
        {
        $model = new MilkPriceModel();
        $model->id =$m['id'];
        $model->price =$m['price'];;
        $model->date =$m['date'];
        $model->company_id = $company_id;
        $model->sequence_id = $sequence_id;
            if ($model->save())
                $count++;
        }
        return $count;
    }
    function  deleteSemination(Request $request)
    {
        return SeminationModel::where('company_id',$request->company_id)->where('sequence_id',$request->sequence_id)->delete();
    }
    function updateSemination(Request $request)
    {
        $models = $request->models;
        $company_id = $request->company_id;
        $sequence_id = $request->sequence_id;
        $count = 0;

        foreach ($models as $m)
        {
        $model = new SeminationModel();
        $model->id =$m['id'];
        $model->mom_id =$m['mom_id'];
        $model->dad_id =$m['dad_id'];
        $model->child_id =$m['child_id'];
        $model->split_date =$m['split_date'];
        $model->date =$m['date'];
        $model->company_id = $company_id;
        $model->sequence_id = $sequence_id;
            if ($model->save())
                $count++;
        }
        return $count;
    }
    function  deleteTable(Request $request)
    {
        return TableModel::where('company_id',$request->company_id)->where('sequence_id',$request->sequence_id)->delete();
    }
    function updateTable(Request $request)
    {
        $count = 0;
        $model = new TableModel();
        $model->id =$request->id;
        $model->name =$request->name;
        $model->nBirth =$request->nBirth;
        $model->nSplit =$request->nSplit;
        $model->expired_days =$request->expired_days;
        $model->unLimited =$request->unLimited;
        $model->nNotSemination =$request->nNotSemination;
        $model->company_id = $request->company_id;
        $model->sequence_id = $request->sequence_id;
        if ($model->save())
            $count++;
        return $count;
    }
    function  deleteUser(Request $request)
    {
        if( UserModel::where('company_id',$request->company_id)->where('sequence_id',$request->sequence_id)->delete())
        return true;
        else
            return false;
    }
    function updateUser(Request $request)
    {
        $models = $request->models;
        $company_id = $request->company_id;
        $sequence_id = $request->sequence_id;
        $count = 0;

        foreach ($models as $m)
        {
        $model = new UserModel();
        $model->id =$m['id'];
        $model->name =$m['name'];
        $model->number =$m['number'];
        $model->company_id = $company_id;
        $model->sequence_id = $sequence_id;
            if ($model->save())
                $count++;
        }
        return $count;
    }
    function  deleteVaccine(Request $request)
    {
        return VaccineModel::where('company_id',$request->company_id)->where('sequence_id',$request->sequence_id)->delete();
    }
    function updateVaccine(Request $request)
    {
        $models = $request->models;
        $company_id = $request->company_id;
        $sequence_id = $request->sequence_id;
        $count = 0;

        foreach ($models as $m)
        {
        $model = new VaccineModel();
        $model->id =$m['id'];
            $model->name =$m['name'];
            $model->note =$m['note'];
            $model->frequency =$m['frequency'];
        $model->price =$m['price'];;
        $model->company_id = $company_id;
        $model->sequence_id = $sequence_id;
            if ($model->save())
                $count++;
        }
        return $count;
    }
    function  deleteVaccineAnimal(Request $request)
    {
        return VaccineAnimalModel::where('company_id',$request->company_id)->where('sequence_id',$request->sequence_id)->delete();
    }
    function updateVaccineAnimal(Request $request)
    {
        $models = $request->models;
        $company_id = $request->company_id;
        $sequence_id = $request->sequence_id;
        $count = 0;

        foreach ($models as $m)
        {
        $model = new VaccineAnimalModel();
        $model->id =$m['id'];
        $model->animal_id =$m['animal_id'];;
        $model->vaccine_id =$m['vaccine_id'];
        $model->date =$m['date'];
        $model->next_dose_date =$m['next_dose_date'];
        $model->dose_count =$m['dose_count'];
        $model->company_id = $company_id;
        $model->sequence_id = $sequence_id;
            if ($model->save())
                $count++;
        }
        return $count;
    }
}
