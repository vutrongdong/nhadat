import HomeFrontend from '../unexpected/components/Home';
import blogDetail from '../unexpected/components/Detail';
import contact from '../unexpected/components/contact';
import ListBlog from '../unexpected/components/ListBlog';
import listSearch from '../unexpected/components/Search';

export default [
{
    path: '/',
    name: 'homefrontend',
    component: HomeFrontend
}, 
{
    path: '/chitiet/:id/:slug.html',
    name: 'blogDetail',
    component: blogDetail
},
{
    path: '/lien-he.html',
    name: 'contact',
    component: contact
},
{
    path: '/search/value=:value',
    name: 'listSearch',
    component: listSearch
},
{
    path: '/:cid/:slug.html',
    name: 'listblog',
    component: ListBlog
},
];
