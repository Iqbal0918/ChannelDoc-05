<!-- <?php

namespace App\Controllers;
use App\Models\doctorModel;
use \Mpdf\Mpdf;

class DoctorReportGenerate extends BaseController
{
    public function index()
    {
        if (session()->get('doctor_id') == null) {
            return redirect()->to('Doctorlogin/index')->with('fail', 'You must be logged in..');
          }

        $mpdf = new \Mpdf\Mpdf();

        // Write some HTML code:
    

        $mpdf->SetHeader('Channeldoc.lk|Report|{PAGENO}');

        $mpdf->WriteHTML('Document text');
        $mpdf->WriteHTML('Document text');
        
        return redirect()->to($mpdf->Output('filename.pdf','I'));

        
    } 

}

?> -->