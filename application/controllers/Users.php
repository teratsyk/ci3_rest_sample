<?php

require APPPATH . '/libraries/REST_Controller.php';

class Users extends REST_Controller {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
    }

    /**
     * @SWG\Info(title="Sample API", version="0.1")
     */

    /**
     * @SWG\Get(
     *     path="/users",
     *     @SWG\Response(response="200", description="An example resource")
     * )
     */
    public function list_get()
    {
        $headers = $this->input->request_headers();
        //var_dump($headers);
        //exit;
        // 1. クエリパラメータのバリデーション
        //var_dump($this->query());
        //exit;
        // 2. データ取得
        $users = [
            ['id' => 1, 'name' => 'John', 'email' => 'john@example.com', 'fact' => 'Loves coding'],
            ['id' => 2, 'name' => 'Jim', 'email' => 'jim@example.com', 'fact' => 'Developed on CodeIgniter'],
            ['id' => 3, 'name' => 'Jane', 'email' => 'jane@example.com', 'fact' => 'Lives in the USA', ['hobbies' => ['guitar', 'cycling']]],
        ];
        $message = 'No users were found';

        if (!empty($users))
        {
            $this->set_response($users, REST_Controller::HTTP_OK);
        }
        else
        {
            $this->set_response([
                'status' => FALSE,
                'message' => $message,
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

    /**
     * @SWG\Post(
     *     path="/users",
     *     @SWG\Response(response="200", description="An example resource")
     * )
     */
    public function list_post()
    {
        // 1. クエリパラメータのバリデーション
        // 2. リクエストボディのバリデーション
        // 3. データ更新
        $result = ['id' => 4, 'name' => 'miles', 'email' => 'miles@example.com', 'fact' => 'composer'];
        //$result = [];
        $message = 'parameter invalid.';

        if (!empty($result))
        {
            $this->set_response($result, REST_Controller::HTTP_CREATED);
        }
        else
        {
            $this->set_response([
                'status' => FALSE,
                'message' => $message,
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }

    public function detail_get(String $id)
    {
        // 1. クエリパラメータのバリデーション
        // 2. データ取得
        $user = [
            'id' => $id,
            'name' => 'wes',
            'email' => 'miles@example.com',
            'fact' => 'octave play'
        ];
        $message = 'User could not be found';

        if (!empty($user))
        {
            $this->set_response($user, REST_Controller::HTTP_OK);
        }
        else
        {
            $this->set_response([
                'status' => FALSE,
                'message' => $message,
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

    public function detail_put(Int $id)
    {
        // 1. クエリパラメータのバリデーション
        // $this->query()をバリデーションする

        // 2. リクエストボディのバリデーション
        $request_body = json_decode($this->put()[0], true);

        // 3. データ更新
        $updated_user = [
            'id' => $id,
            'name' => $request_body[0]['name'],
            'email' => $request_body[0]['email'],
            'fact' => $request_body[0]['fact']
        ];
        $message = 'Error';

        if (!empty($updated_user))
        {
            $this->set_response($updated_user, REST_Controller::HTTP_ACCEPTED);
        }
        else
        {
            $this->set_response([
                'status' => FALSE,
                'message' => $message,
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

    public function detail_delete(String $id)
    {
        // 1. クエリパラメータのバリデーション
        // 2. データ更新
    }
}
