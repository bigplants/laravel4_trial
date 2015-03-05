<?
/**
 * Created by PhpStorm.
 * User: daikihirakata
 * Date: 15/03/06
 * Time: 1:50
 * @var Post $posts
 */
?>
<h1>Blog posts</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Created</th>
    </tr>
    @foreach($posts as $post)
        <tr>
            <td>{{$post->id}}</td>
            <td>
                {{link_to("posts/view/{$post->id}", $post->title)}}
            </td>
            <td>{{$post->created_at}}</td>
        </tr>
    @endforeach
</table>
