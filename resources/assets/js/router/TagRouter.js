import Tag from '../components/tag/Index';
import NewTag from '../components/tag/Create';
import EditTag from '../components/tag/Edit';

export default [
    {
        path: '/admin/tags',
        name: 'tag',
        component: Tag
    },
    {
        path: '/admin/tags/create',
        name: 'tag.create',
        component: NewTag
    },
    {
        path: '/admin/tags/edit/:id',
        name: 'tag.edit',
        component: EditTag
    }
];
