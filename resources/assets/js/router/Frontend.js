import HomeFrontend from '../unexpected/components/Home';
import blogDetail from '../unexpected/components/Detail';
import contact from '../unexpected/components/contact';
import ListBlog from '../unexpected/components/ListBlog';

export default [
{
    path: '/',
    name: 'homefrontend',
    component: HomeFrontend
}, 
// {
//     path: '/:id/:slug.html',
//     name: 'blogDetail',
//     component: blogDetail
// },
{
    path: '/lien-he.html',
    name: 'contact',
    component: contact
},
{
    path: '/:cid/:slug.html',
    name: 'listblog',
    component: ListBlog
},
];
