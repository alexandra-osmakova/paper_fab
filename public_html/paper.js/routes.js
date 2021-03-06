function login() {
    location.href = "/login";
}

function logout() {
    $.post(
        "../login/logout.php",
        {},
        function () {
            location.href = "/login";
        }
    );
}

function addUser() {
    location.href = "/admin/add/user";
}

function editUser(id) {
    location.href = "/admin/edit/user/" + id;
}

function deleteUser(id) {
    if (confirm("Вы действительно хотите удалить пользователя?")) {
        location.href = "/admin/delete/user/" + id;
    }
}

function viewUser(userid) {
    location.href = "/admin/user/" + userid;
}

function addTel() {
    var count = $("#count").val();

    var label = $("<label id='" + count + "' for='" + count + "'>Доп. телефон №" + count + "<button class='btn delete' style='width: 1rem;height: 1rem;font-size: 0.8rem;' onclick='delTel(" + count + ")'>-</button></label>"),
        input = $("<input type='tel' id='" + count + "' name='dop_tel[]'>");

    $("#count").val(++count);

    $("#contact").append(label, input);
}

function delTel(id) {
    $("label#" + id).remove();
    $("input#" + id).remove();
}

function back() {
    location.href = "/admin";
}

function file() {
    $("input#file").click();
}

function openFile(href) {
    location.href = href;
}

function addPost() {
    location.href = "/admin/add/post";
}

function editPost(id) {
    location.href = "/admin/edit/post/" + id;
}

function viewPost(id) {
    location.href = "/post/" + id;
}

function deletePost(id) {
    if (confirm("Вы действительно хотите удалить пост?"))
        location.href = "/admin/delete/post/" + id;
}

function addFAQ() {
    location.href = "/admin/add/faq";
}

function editFAQ(id) {
    location.href = "/admin/edit/faq/" + id;
}

function deleteFAQ(id) {
    if (confirm("Вы действительно хотите удалить вопрос?"))
        location.href = "/admin/delete/faq/" + id;
}