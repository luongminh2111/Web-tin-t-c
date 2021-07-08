<?php
namespace console\controllers;

use Exception;
use Yii;
use yii\console\Controller;

class RbacController extends Controller
{
//    public function actionInit()
//    {
//        $auth = Yii::$app->authManager;
//        // them quyen truy cap
//        // ten action noi voi ten controller
////        $createArticle = $auth->createPermission('create-article');
////        $createArticle->description = 'Create a Article';
////        try {
////            $auth->add($createArticle);
////        } catch (\Exception $e) {
////        }
////
////        $indexArticle = $auth->createPermission('index-article');
////        $indexArticle->description = 'Xem danh sách bài viết';
////        try {
////            $auth->add($indexArticle);
////        } catch (\Exception $e) {
////        }
////
////        $updateArticle = $auth->createPermission('update-article');
////        $updateArticle->description = 'Cập nhật bài viết';
////        try {
////            $auth->add($updateArticle);
////        } catch (\Exception $e) {
////        }
////
////        $viewArticle = $auth->createPermission('view-article');
////        $viewArticle->description = 'Xem chi tiết bài viết';
////        try {
////            $auth->add($viewArticle);
////        } catch (\Exception $e) {
////        }
////        $deleteArticle = $auth->createPermission('delete-article');
////        $deleteArticle->description = 'Xóa bài viết';
////        try {
////            $auth->add($deleteArticle);
////        } catch (\Exception $e) {
////        }
//        // thêm nhóm quyền
////        $articleManager = $auth->createRole('manager-article');
////        try {
////            $auth->add($articleManager);
////        } catch (\Exception $e) {
////        }
//        // gán quyền cho nhóm
////        $createArticle = $auth->createPermission('create-article');
////        $indexArticle = $auth->createPermission('index-article');
////        $updateArticle = $auth->createPermission('update-article');
////        $viewArticle = $auth->createPermission('view-article');
////        $deleteArticle = $auth->createPermission('delete-article');
//        $articleManager = $auth->createRole('manager-article');
////
////        $auth->addChild($articleManager, $indexArticle);
////        $auth->addChild($articleManager, $updateArticle);
////        $auth->addChild($articleManager, $viewArticle);
////        $auth->addChild($articleManager, $deleteArticle);
//        //gan quyen cho nguoi dung
//        try {
//            $auth->assign($articleManager, 2);
//        } catch (Exception $e) {
//        }
//    }
    public function actionInit()
    {
        $auth = Yii::$app->authManager;

        // add "createArticle" permission
        $createArticle = $auth->createPermission('createArticle');
        $createArticle->description = 'Create a article';
        $auth->add($createArticle);

        // add "updatePost" permission
        $updateArticle = $auth->createPermission('updateArticle');
        $updateArticle->description = 'Update post';
        $auth->add($updateArticle);

        // add "author" role and give this role the "createPost" permission
        $author = $auth->createRole('author');
        $auth->add($author);
        $auth->addChild($author, $createArticle);

        // add "admin" role and give this role the "updatePost" permission
        // as well as the permissions of the "author" role
        $admin = $auth->createRole('admin');
        $auth->add($admin);
        $auth->addChild($admin, $updateArticle);
        $auth->addChild($admin, $author);

        // Assign roles to users. 1 and 2 are IDs returned by IdentityInterface::getId()
        // usually implemented in your User model.
        $auth->assign($author, 2);
        $auth->assign($admin, 1);
    }

}
?>