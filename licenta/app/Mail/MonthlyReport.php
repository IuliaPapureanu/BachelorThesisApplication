<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MonthlyReport extends Mailable
{
    use Queueable, SerializesModels;

    public $balanceSheets;
    public $balanceSheetsByMonth;
    public $yearlyProfit;
    public $yearlyIncome;
    public $yearlyExpenses;
    public $lastProfit;
    public $lastIncome;
    public $lastExpenses;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($balanceSheets,$balanceSheetsByMonth,$yearlyProfit,$yearlyIncome,$yearlyExpenses,$lastProfit,$lastIncome,$lastExpenses)
    {
        $this->balanceSheets=$balanceSheets;
        $this->balanceSheetsByMonth=$balanceSheetsByMonth;
        $this->yearlyProfit = $yearlyProfit;
        $this->yearlyIncome=$yearlyIncome;
        $this->yearlyExpenses=$yearlyExpenses;
        $this->lastProfit=$lastProfit;
        $this->lastIncome=$lastIncome;
        $this->lastExpenses=$lastExpenses;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.monthly_report')->subject('Monthly Report');
    }
}
