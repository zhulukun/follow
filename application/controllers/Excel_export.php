<?php
class Excel_export extends CI_Controller{
    function __construct()
    {
        parent :: __construct();
        $this->load->model('Excel_model');
        // Hereyoushouldaddsomesortofuservalidation
        // topreventstrangersfrompullingyourtabledata
    }

    function index()
    {

        $query = $this->Excel_model->get();
        if(!$query)
            return false;
        // StartingthePHPExcellibrary
        $this ->load-> library('PHPExcel');
        $this ->load-> library('PHPExcel/IOFactory');
        $objPHPExcel = new PHPExcel();
        $objPHPExcel -> getProperties() -> setTitle("export") -> setDescription("none");
        $objPHPExcel -> setActiveSheetIndex(0);
        // Fieldnamesinthefirstrow
        $fields = $query -> list_fields();
        $col = 0;
        foreach($fields as $field)
        {
            $objPHPExcel -> getActiveSheet() -> setCellValueByColumnAndRow($col, 1, $field);
            $col++;
            }
        // Fetchingthetabledata
        $row = 2;
        foreach($query -> result()as$data)
        {
            $col = 0;
            foreach($fields as $field)
            {
                $objPHPExcel -> getActiveSheet() -> setCellValueByColumnAndRow($col, $row, $data -> $field);
                $col++;
                }
            $row++;
            }
        $objPHPExcel -> setActiveSheetIndex(0);
        $objWriter = IOFactory :: createWriter($objPHPExcel, 'Excel5');
        // Sendingheaderstoforcetheusertodownloadthefile
        header('Content-Type:application/vnd.ms-excel');
        header('Content-Disposition:attachment;filename="Products_' . date('dMy') . '.xls"');
        header('Cache-Control:max-age=0');
        $objWriter -> save('php://output');
        }
    }