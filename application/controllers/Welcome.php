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
        $this->_css = array();
        $this->_js  = array();

        /**
         * PASS IT TO VIEW BY ASSIGNING IT TO DATA ARRAY
         */
        $this->data['_css'] = $this->_css;
        $this->data['_js']  = $this->_js;
    }

    /**
     * @param $site
     */
    public function index($site = '')
    {
        $data['_view'] = 'home/home';
        // $data['_css']                = $this->_css;
        // $data['_js']                 = $this->_js;
        $data['_title']              = $this->distributer;
        $data['_active_distributer'] = $this->distributer;
        $data['_view']               = 'home/home';
        // echo "<h3>Welcome to ".$this->uri->segment(1)."</h3>";

        $this->load->view('layout', $data);
        print_r($this->data);
        // $this->test_composer();
        // $this->load->view('welcome_message');

        $this->load->view('layout', $data);
    }

    public function contact_us()
    {
        echo "<h3>Welcome to contact us</h3>";
    }

    public function get_todays_date()
    {
        echo json_encode(array("status" => true, "msg" => "todays date and time", "datos" => date('d/m h:i')));
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
