<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Asantibanez\LivewireCharts\Models\ColumnChartModel;

class Dashboard extends Component
{
    public function render()
    {
        $columnChartModel =
            (new ColumnChartModel())
            ->setTitle('Expenses by Type')
            ->addColumn('Food', 100, '#f6ad55')
            ->addColumn('Shopping', 200, '#fc8181')
            ->addColumn('Travel', 300, '#90cdf4');

        return view('livewire.admin.dashboard')->with([
            'columnChartModel' => $columnChartModel,
        ]);
    }
}
