<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ViewLog as ViewLogModel;

class ViewLog extends Controller
{

    public function selectviewlog(request $request)    
    {                
            $logs = ViewLogModel::query()
                ->when(request('username'), function ($query) {
                    $query->where('username', request('username'));
                    })
                ->when(request('path'), function ($query) {
                        $query->where('path', 'LIKE', '%' . request('path') .'%');
                        })    
                ->when(request('from_path'), function ($query) {
                        $query->where('from_path', 'LIKE', '%' . request('from_path') .'%');
                        })                                           
            ->orderBy('ts', 'desc')->limit(request('items_per_user'))->get();            
        

       // dd($logs);
        return view('logviewtable', ['logs'=>$logs]);
    }
    //
}



// ================================================================
// @app.post('/viewall_f/')
// async def viewall_f(request: Request, username: str = Form(default="", min_length=0, max_length=256),
//                     path: str = Form(default="", min_length=0, max_length=256),
//                     from_path: str = Form(default="", min_length=0, max_length=256),
//                     items_per_user: int = Form(default=50, ge=5, lt=1000),
//                     formatoutput: str = Form()):
//     """Получение данных по запущенным обработкам, согласно данным из формы запроса"""
//     if username != '' or path != '' or from_path != '':
//         # Не пустые данные запроса
//         flag = False
//         sqltext = "SELECT * FROM VIEW_LOG WHERE "
//         if username:
//             flag = True
//             sqltext += " username='" + username + "'"
//         if flag and path:
//             sqltext += " AND path='" + path + "'"
//         elif path:
//             flag = True
//             sqltext += " path='" + path + "'"
//         if flag and from_path:
//             sqltext += " AND from_path='" + from_path + "'"
//         elif from_path:
//             sqltext += " from_path='" + from_path + "'"

//         sqltext += " ORDER BY ts DESC LIMIT " + str(items_per_user)
//         data = engine.execute(sqltext).fetchall()
//     else:
//         sqltext = '''
//                 SELECT *
//                 FROM VIEW_LOG
//                 ORDER BY ts DESC
//                 LIMIT 
//             ''' + str(items_per_user)
//         data = engine.execute(sqltext).fetchall()
//     if formatoutput == "JSON":
//         # response = [dict(r) for r in data]
//         # return JSONResponse(content=jsonable_encoder(response))
//         response = [dict(r) for r in data]
//         return JSONResponse(content=response)
//     elif formatoutput == "JSON_STR":
//         # response = [dict(r) for r in data]
//         # return JSONResponse(content=jsonable_encoder(response))
//         response = [dict(r) for r in data]
//         json_str = json.dumps(response, indent=4, default=str, ensure_ascii=False)
//         return Response(content=json_str, media_type='application/json')
//     elif formatoutput == "HTML":
//         response = [dict(r) for r in data]
//         response_html = json2html.convert(json=response)
//         return HTMLResponse(content=response_html)
//     else:
//         response = "\n".join([str(list(dict(r).values())) for r in data])
//         return PlainTextResponse(content=response)
