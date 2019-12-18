<?php
// namespace Application;
defined('BASEPATH') or exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Welcome extends MY_Controller implements CrudModelInterface
{
    /**
     * @var mixed
     */
    private $logViewer;

    public function __construct()
    {
        parent::__construct();
        $this->logViewer = new \CILogViewer\CILogViewer();
        // echo APPPATH.'interfaces/CrudModelInterface.php';
    }

    public function index()
    {
        // $this->test_composer();
        print_r($this->data);
        // $this->load->view('welcome_message');
    }

    public function create()
    {
        //
    }

    public function store()
    {
        //
    }

    /**
     * @param $id
     */
    public function show($id)
    {
        //
    }

    public function update()
    {
        //
    }

    /**
     * @param $id
     */
    public function destroy($id)
    {
        //
    }

    public function printing()
    {
        //
    }

    public function test_excel()
    {
        $spreadsheet = new Spreadsheet();
        $sheet       = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'Hello World !');

        $writer = new Xlsx($spreadsheet);
        // $writer->save('hello world.xlsx');
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="hello-world.xlsx"');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }

    /**
     * @return null
     */
    public function app_logs()
    {
        echo $this->logViewer->showLogs();
        return;
    }

}
