<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    {{-- "https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.3/css/bulma.min.css" --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.3/css/bulma.css">
    <style>body {padding-top: 40px;}</style>

</head>
<body>
    <div id="app" class="container">
        {{-- @include('project.list') --}}

        <form method="POST" action="/projects" @submit.prevent="onSubmit">
            <div class="contorl">
                <label for="name" class="label">Project Name:</label>

                <input type="text" name="name" id="name" class="input" v-model="name">
            </div>

            <div class="contorl">
                <label for="discription" class="label">Project Description:</label>

                <input type="text" name="discription" id="discription" class="input" v-model="description">
            </div>

            <div class="control">
                <button class="button is-primary">Create</button>
            </div>
        </form>



    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.25.0/axios.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="/js/app.js"></script>


</body>
</html>
