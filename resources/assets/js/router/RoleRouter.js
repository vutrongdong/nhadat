import Role from '../components/Role';
import NewRole from '../components/NewRole';

export default [
    {
        path: '/admin/role',
        name: 'role',
        component: Role
    },
    {
        path: '/admin/role/create',
        name: 'role.create',
        component: NewRole
    },
    {
        path: '/admin/role/:id/edit',
        name: 'role.edit',
        component: NewRole
    }
];
