<?php

namespace App\Util;

require __DIR__ . "/../database/db.php";

class ViewGenerator {

    public static function generateUsers() {
        $page = "";

        $users = \R::findAll("users");

        foreach ($users as $user) {
            if($user->login === "administrator") {
                continue;
            }else {
                $info = \R::findOne("info", "WHERE userid=:userid", ["userid"=>$user->id]);

                $page .= "<tr>
                            <td>" . $user->id . "</td>
                            <td>" . $info["surname"] . " " . $info["name"] . " " . $info["midname"] . "</td>
                            <td><a href=\"tel:" . $info["phoneprimary"] . "\">" . $info["phoneprimary"] . "</a></td>
                            <td><button class=\"btn view\" onclick=\"viewUser(" . $user->id . ")\">
                                    <svg version=\"1.1\" id=\"Capa_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
                                         width=\"932.15px\" height=\"932.15px\" viewBox=\"0 0 932.15 932.15\" style=\"enable-background:new 0 0 932.15 932.15;\"
                                         xml:space=\"preserve\">
<g>
    <path d=\"M466.075,161.525c-205.6,0-382.8,121.2-464.2,296.1c-2.5,5.3-2.5,11.5,0,16.9c81.4,174.899,258.601,296.1,464.2,296.1
		s382.8-121.2,464.2-296.1c2.5-5.3,2.5-11.5,0-16.9C848.875,282.725,671.675,161.525,466.075,161.525z M466.075,676.226
		c-116.1,0-210.1-94.101-210.1-210.101c0-116.1,94.1-210.1,210.1-210.1c116.1,0,210.1,94.1,210.1,210.1
		S582.075,676.226,466.075,676.226z\"/>
    <circle cx=\"466.075\" cy=\"466.025\" r=\"134.5\"/>
</g>
</svg>
                                </button></td>
                            <td>" . $info["investement"] . " руб.</td>
                            <td>
                                <div class=\"controls\">
                                    <button class=\"btn edit\" onclick=\"editUser(" . $user->id . ")\">
                                        <svg version=\"1.1\" id=\"Capa_1\" xmlns=\"http://www.w3.org/2000/svg\"
                                             xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
                                             viewBox=\"0 0 268.7 268.7\" style=\"enable-background:new 0 0 268.7 268.7;\"
                                             xml:space=\"preserve\">
<g id=\"Edit\">
    <path d=\"M161.4,56.3c-7-7-18.5-7-25.5,0l-6.4,6.4l-89.2,89.3l0,0l-2.8,2.8c0,0-9,9-29.2,74.4c-0.1,0.5-0.3,0.9-0.4,1.4
		c-0.4,1.2-0.7,2.4-1.1,3.6c-0.3,1.1-0.7,2.2-1,3.2c-0.3,0.9-0.6,1.8-0.8,2.8c-0.6,2.1-1.3,4.3-2,6.6c-1.5,4.9-5,16.1-1,20.1
		c3.9,3.9,15.1,0.5,20-1c2.2-0.7,4.4-1.3,6.5-2c1-0.3,1.9-0.6,2.9-0.9c1-0.3,2.1-0.6,3.1-0.9c1.3-0.4,2.5-0.8,3.8-1.2
		c0.4-0.1,0.7-0.2,1.1-0.3c62.2-19.4,73.4-28.5,74.3-29.3c0,0,0,0,0,0c0,0,0.1-0.1,0.1-0.1l2.9-2.9l0.2,0.2l89.2-89.3l0,0l6.4-6.4
		c7-7,7-18.5,0-25.5L161.4,56.3z M103.4,219.8c-0.1,0.1-0.2,0.1-0.3,0.2c-0.1,0-0.1,0.1-0.2,0.1c-0.1,0-0.2,0.1-0.2,0.2
		c-0.1,0-0.2,0.1-0.2,0.1c-3,1.8-11.7,6.4-32.8,14c-2.5,0.9-5.2,1.8-8,2.8l-30.1-30.1c1-2.8,1.9-5.6,2.8-8c7.6-21.2,12.2-30,14-32.9
		c0-0.1,0.1-0.1,0.1-0.2c0.1-0.1,0.1-0.2,0.2-0.3c0-0.1,0.1-0.1,0.1-0.2c0.1-0.1,0.1-0.2,0.2-0.3l2.2-2.2l54.5,54.5L103.4,219.8z
		 M263.4,56.3l-51-51c-7-7-18.5-7-25.5,0L174.1,18c-7,7-7,18.5,0,25.5l51,51.1c7,7,18.5,7,25.5,0l12.7-12.8
		C270.4,74.8,270.4,63.4,263.4,56.3z\"/>
</g>
</svg>
                                    </button>
                                    <button class=\"btn delete\" onclick=\"deleteUser(" . $user->id . ")\">
                                        <svg version=\"1.1\" id=\"Capa_1\" xmlns=\"http://www.w3.org/2000/svg\"
                                             xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
                                             viewBox=\"0 0 459 459\" style=\"enable-background:new 0 0 459 459;\"
                                             xml:space=\"preserve\">
	<g id=\"delete\">
        <path d=\"M76.5,408c0,28,22.9,51,51,51h204c28,0,51-23,51-51V102h-306V408z M408,25.5h-89.2L293.2,0H165.8l-25.5,25.5H51v51h357
			V25.5z\"/>
    </g>
</svg>
                                    </button>
                                </div>
                            </td>
                        </tr>";

                unset($info);
            }
        }

        return $page;
    }

    public static function generatePosts() {
        $page = "";

        $posts = \R::findAll("posts");

        foreach ($posts as $post) {
            $page .= "<tr>
                            <td>" . $post->date . "</td>
                            <td>" . $post->title . "</td>
                            <td>" . mb_substr($post->text, 0, 120) . "..." . "</td>
                            <td>
                                <div class=\"controls\">
                                    <button class=\"btn view\" onclick='viewPost(" . $post->id . ")'>
                                        <svg version=\"1.1\" id=\"Capa_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
                                                                  width=\"932.15px\" height=\"932.15px\" viewBox=\"0 0 932.15 932.15\" style=\"enable-background:new 0 0 932.15 932.15;\"
                                                                  xml:space=\"preserve\">
<g>
    <path d=\"M466.075,161.525c-205.6,0-382.8,121.2-464.2,296.1c-2.5,5.3-2.5,11.5,0,16.9c81.4,174.899,258.601,296.1,464.2,296.1
		s382.8-121.2,464.2-296.1c2.5-5.3,2.5-11.5,0-16.9C848.875,282.725,671.675,161.525,466.075,161.525z M466.075,676.226
		c-116.1,0-210.1-94.101-210.1-210.101c0-116.1,94.1-210.1,210.1-210.1c116.1,0,210.1,94.1,210.1,210.1
		S582.075,676.226,466.075,676.226z\"/>
    <circle cx=\"466.075\" cy=\"466.025\" r=\"134.5\"/>
</g>
</svg>
                                    </button>
                                    <button class=\"btn edit\" onclick=\"editPost(" . $post->id . ")\">
                                        <svg version=\"1.1\" id=\"Capa_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
                                                                  viewBox=\"0 0 268.7 268.7\" style=\"enable-background:new 0 0 268.7 268.7;\" xml:space=\"preserve\">
<g id=\"Edit\">
    <path d=\"M161.4,56.3c-7-7-18.5-7-25.5,0l-6.4,6.4l-89.2,89.3l0,0l-2.8,2.8c0,0-9,9-29.2,74.4c-0.1,0.5-0.3,0.9-0.4,1.4
		c-0.4,1.2-0.7,2.4-1.1,3.6c-0.3,1.1-0.7,2.2-1,3.2c-0.3,0.9-0.6,1.8-0.8,2.8c-0.6,2.1-1.3,4.3-2,6.6c-1.5,4.9-5,16.1-1,20.1
		c3.9,3.9,15.1,0.5,20-1c2.2-0.7,4.4-1.3,6.5-2c1-0.3,1.9-0.6,2.9-0.9c1-0.3,2.1-0.6,3.1-0.9c1.3-0.4,2.5-0.8,3.8-1.2
		c0.4-0.1,0.7-0.2,1.1-0.3c62.2-19.4,73.4-28.5,74.3-29.3c0,0,0,0,0,0c0,0,0.1-0.1,0.1-0.1l2.9-2.9l0.2,0.2l89.2-89.3l0,0l6.4-6.4
		c7-7,7-18.5,0-25.5L161.4,56.3z M103.4,219.8c-0.1,0.1-0.2,0.1-0.3,0.2c-0.1,0-0.1,0.1-0.2,0.1c-0.1,0-0.2,0.1-0.2,0.2
		c-0.1,0-0.2,0.1-0.2,0.1c-3,1.8-11.7,6.4-32.8,14c-2.5,0.9-5.2,1.8-8,2.8l-30.1-30.1c1-2.8,1.9-5.6,2.8-8c7.6-21.2,12.2-30,14-32.9
		c0-0.1,0.1-0.1,0.1-0.2c0.1-0.1,0.1-0.2,0.2-0.3c0-0.1,0.1-0.1,0.1-0.2c0.1-0.1,0.1-0.2,0.2-0.3l2.2-2.2l54.5,54.5L103.4,219.8z
		 M263.4,56.3l-51-51c-7-7-18.5-7-25.5,0L174.1,18c-7,7-7,18.5,0,25.5l51,51.1c7,7,18.5,7,25.5,0l12.7-12.8
		C270.4,74.8,270.4,63.4,263.4,56.3z\"/>
</g>
</svg>
                                    </button>
                                    <button class=\"btn delete\" onclick='deletePost(" . $post->id . ")'>
                                        <svg version=\"1.1\" id=\"Capa_1\" xmlns=\"http://www.w3.org/2000/svg\"
                                             xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
                                             viewBox=\"0 0 459 459\" style=\"enable-background:new 0 0 459 459;\" xml:space=\"preserve\">
	<g id=\"delete\">
        <path d=\"M76.5,408c0,28,22.9,51,51,51h204c28,0,51-23,51-51V102h-306V408z M408,25.5h-89.2L293.2,0H165.8l-25.5,25.5H51v51h357
			V25.5z\"/>
    </g>
</svg>
                                    </button>
                                </div>
                            </td>
                        </tr>";
        }

        return $page;
    }

    public static function userInfo($id) {
        $user = \R::findOne("info", "WHERE userid=:userid", ["userid" => $id]);

        $message = "<b>Дата вложения :</b> " . $user->date . "<br>" .
                    "<b>Наименование компании :</b> " . $user->company . "<br>" .
                    "<b>Доп. информация :</b> " . $user->addition;

        return $message;
    }
}
