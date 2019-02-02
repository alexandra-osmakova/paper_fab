<?php

namespace App\Util;

require __DIR__ . "/../database/db.php";

class ViewGenerator
{

    public static function generateUsers()
    {
        $page = "";

        $users = \R::findAll("users");

        foreach ($users as $user) {
            if ($user->login === "administrator") {
                continue;
            } else {
                $info = \R::findOne("info", "WHERE userid=:userid", ["userid" => $user->id]);

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

    public static function generatePosts()
    {
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

    public static function showDocs($login)
    {
        $userid = \R::getAll("SELECT users.id FROM users WHERE login=:login", ["login" => base64_decode($login)])[0]["id"];
        $docs = \R::findAll("docs", "WHERE userid=:userid", ["userid" => $userid]);

        $page = "";
        $count = 1;

        foreach ($docs as $doc) {
            if ($count === 1) {
                $page .= "<div class='docs'>";
            }
            $page .= "<div class=\"doc\">
                        <div class=\"pic\">
                            <svg version=\"1.1\" id=\"Capa_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
                                 viewBox=\"0 0 56 56\" style=\"enable-background:new 0 0 56 56;\" xml:space=\"preserve\">
<style type=\"text/css\">
    .st0{fill:#E9E9E0;}
    .st1{fill:#D9D7CA;}
    .st2{fill:#CC4B4C;}
    .st3{fill:#FFFFFF;}
</style>
                                <g>
                                    <path class=\"st0\" d=\"M37,0H8C7.2,0,6.5,0.7,6.5,1.9V55c0,0.3,0.7,1,1.5,1H48c0.8,0,1.5-0.7,1.5-1V13c0-0.7-0.1-0.9-0.3-1.1
		L37.6,0.3C37.4,0.1,37.2,0,37,0z\"/>
                                    <polygon class=\"st1\" points=\"37.5,0.2 37.5,12 49.3,12 	\"/>
                                    <path class=\"st2\" d=\"M19.5,33.3L19.5,33.3c-0.3,0-0.7-0.1-1-0.3c-1-0.8-1.2-1.6-1.1-2.2c0.2-1.6,2.2-3.3,6-5.1
		c1.5-3.3,2.9-7.4,3.8-10.8c-1-2.2-2-5-1.3-6.6c0.2-0.6,0.6-1,1.1-1.2c0.2-0.1,0.8-0.2,1-0.2c0.5,0,0.9,0.6,1.3,1
		c0.3,0.4,1,1.2-0.4,6.8c1.3,2.8,3.3,5.6,5.1,7.6c1.3-0.2,2.4-0.4,3.4-0.4c1.6,0,2.5,0.4,2.9,1.1c0.3,0.6,0.2,1.3-0.4,2.2
		c-0.6,0.8-1.3,1.2-2.2,1.2c-1.2,0-2.6-0.8-4.2-2.3c-2.8,0.6-6.1,1.7-8.8,2.8c-0.8,1.8-1.6,3.2-2.4,4.3
		C21.3,32.7,20.4,33.3,19.5,33.3z M22.2,28.2c-2.1,1.2-3,2.2-3.1,2.7c0,0.1,0,0.3,0.4,0.7C19.7,31.6,20.6,31.2,22.2,28.2z
		 M35.8,23.8c0.8,0.6,1,0.9,1.5,0.9c0.2,0,0.9,0,1.2-0.4c0.1-0.2,0.2-0.3,0.2-0.4c-0.1-0.1-0.3-0.2-1.2-0.2
		C37.1,23.6,36.5,23.7,35.8,23.8z M28.3,17.2c-0.7,2.5-1.7,5.1-2.7,7.6c2.1-0.8,4.4-1.5,6.5-2C30.8,21.1,29.5,19.2,28.3,17.2z
		 M27.7,8.7c-0.1,0-1.3,1.8,0.1,3.2C28.8,9.8,27.8,8.7,27.7,8.7z\"/>
                                    <path class=\"st2\" d=\"M48,56H8c-0.8,0-1.5-0.7-1.5-1.5V39h43v15.5C49.5,55.3,48.8,56,48,56z\"/>
                                    <g>
                                        <path class=\"st3\" d=\"M17.4,53h-1.6V42.9h2.9c0.4,0,0.9,0.1,1.3,0.2s0.8,0.3,1.1,0.6c0.3,0.3,0.6,0.6,0.8,1s0.3,0.8,0.3,1.3
			c0,0.5-0.1,1-0.3,1.4s-0.4,0.8-0.7,1S20.5,49,20,49.1s-0.9,0.2-1.4,0.2h-1.2L17.4,53L17.4,53z M17.4,44.2v4h1.5
			c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.4-0.2,0.5-0.3c0.2-0.2,0.3-0.4,0.4-0.6s0.1-0.6,0.1-1c0-0.2,0-0.4-0.1-0.6c0-0.2-0.1-0.4-0.3-0.6
			c-0.1-0.2-0.3-0.4-0.6-0.5s-0.6-0.2-1-0.2L17.4,44.2L17.4,44.2z\"/>
                                        <path class=\"st3\" d=\"M32.2,47.7c0,0.8-0.1,1.5-0.3,2.1s-0.4,1.1-0.7,1.5s-0.6,0.7-0.9,0.9s-0.7,0.4-1,0.5
			c-0.3,0.1-0.6,0.2-0.9,0.2c-0.3,0-0.5,0-0.6,0h-3.8V42.9h3c0.8,0,1.6,0.1,2.2,0.4s1.2,0.6,1.6,1.1s0.7,1,1,1.5
			C32.1,46.5,32.2,47.1,32.2,47.7z M27.4,51.8c1.1,0,1.9-0.4,2.4-1.1s0.7-1.7,0.7-3.1c0-0.4,0-0.8-0.1-1.2c-0.1-0.4-0.3-0.8-0.6-1.1
			s-0.7-0.6-1.2-0.8s-1.1-0.3-1.9-0.3h-1v7.6C25.7,51.8,27.4,51.8,27.4,51.8z\"/>
                                        <path class=\"st3\" d=\"M36.3,44.2v3.2h4.2v1.1h-4.2V53h-1.7V42.9h6.3v1.2H36.3z\"/>
                                    </g>
                                </g>
</svg>
                            <button onclick=\"openFile('" . $doc->href . "')\">
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
                        </div>
                        <h3>" . preg_replace("$/docs/$", "", $doc->href) . "</h3>
                    </div>";


            $count++;

            if ($count === 5) {
                $page .= "</div>";
                $count = 1;
            }
        }

        return $page;
    }

    public static function userInfo($id)
    {
        $user = \R::findOne("users", "WHERE id=:id", ["id" => $id]);
        $info = \R::findOne("info", "WHERE userid=:userid", ["userid" => $id]);
        $type = \R::findOne($user->type, "WHERE userid=:userid", ["userid" => $id]);

        $message = "<b>Дата вложения :</b> " . $info["date"] .
            "<br><b>Дополнительный контакт :</b> " . $info["phonesecondary"] .
            "<br><b>Доп. информация :</b> " . $info["addition"];

        switch ($user->type) {
            case "company" :
                $message .= "<hr><b>Наименование компании :</b> " . $type["name"] .
                    "<br><b>ИНН :</b> " . $type["inn"] .
                    "<br><b>КПП :</b> " . $type["kpp"] .
                    "<br><b>ОГРН :</b> " . $type["ogrn"];
                break;
            case "physical" :
                $message .= "<hr><b>Пасспорт :</b> " . $type["serie"] . " " . $type["number"] .
                    "<br><b>Выдан :</b> " . $type["structure"] .
                    "<br><b>Дата выдачи :</b> " . $type["date"] .
                    "<br><b>Код подразделения :</b> " . $type["code"];
                break;
        }

        return $message;
    }

    public static function getUserName($login) {
        $user_name = \R::getAssocRow("SELECT info.name, info.surname FROM info JOIN users ON info.userid=users.id WHERE users.login=:login", ["login" => base64_decode($login)]);

        return $user_name;
    }

    public static function getTotalMoney() {
        $money = \R::getAll("SELECT info.investement FROM info");

        return $money;
    }

    public static function getNewsMain() {
        $news = \R::findAll("posts");
        $news = array_reverse($news, true);
        $count = 0;
        $page = "<div class=\"news_content_item\">";

        foreach ($news as $post) {
            $post["text"] = strip_tags(mb_substr($post["text"], 0, 100));

            if($count === 0) {
                $page .= "
                    <div class=\"news_img_wrap\" style=\"background-image: url('" . $post["bg"] . "')\"></div>
                    <p class=\"news_text_main\"><a href=\"/post/" . $post["id"] . "\">" . $post["text"] . "</a></p>
                    <span class=\"news_date\">" . $post["date"] . "</span>
                   </div>";

                $count = 1;
            }else {
                if($count === 1) {
                    $page .= "
                        <div class=\"news_content_item\">
                            <div class=\"news-slider\">
                            <div><div class=\"news_slider_item\">
                                  <div class=\"news_content__item_piece\">
                                      <p class=\"common_text\"><a href=\"/post/" . $post["id"] . "\">" . $post["text"] . "</a></p>
                                      <span class=\"news_date\">" . $post["date"] . "</span>
                                  </div>";
                    $count = 3;
                }else {
                    if($count === 2) {
                        $page .= "
                            <div><div class=\"news_slider_item\">";
                    }

                    $page .= "
                        <div class=\"news_content__item_piece\">
                            <p class=\"common_text\">" . $post["text"] . "</p>
                            <span class=\"news_date\">" . $post["date"] . "</span>
                        </div>";

                    $count++;

                    if($count === 6) {
                        $page .= "</div></div>";
                        $count = 2;
                    }
                }
            }
        }

        $page .= "</div></div>";

        return $page;
    }
}
