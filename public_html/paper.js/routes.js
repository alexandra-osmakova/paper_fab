function login() {
    location.href = "/login";
}

function addUser() {
    location.href = "/admin/add.user.php";
}

function addPost() {
    location.href = "/admin/add.post.php";
}

function view(userid) {
    location.href = "/admin/view.user.php?id=" + userid;
}

function remove(userid) {
    location.href = "/admin/delete.user.php?id=" + userid;
}

function addTel() {
    var count = $("#count").val();

    var label = $("<label id='" + count + "' for='" + count + "'>Доп. телефон №" + count + "<button class='btn delete' style='width: 1rem;height: 1rem;font-size: 0.8rem;' onclick='delTel(" + count + ")'>-</button></label>"),
        input = $("<input type='tel' id='" + count + "' name='dop_tel[]'>");

    $("#count").val(++count);

    $( "#contact" ).append(label, input);
}

function delTel(id) {
    $("label#" + id).remove();
    $("input#" + id).remove();
}

function back() {
    location.href = "/admin/posts.php";
}

function file() {
    $("input#file").click();
}

function editPost(id) {
    location.href = "/admin/edit.post.php?id=" + id;
}