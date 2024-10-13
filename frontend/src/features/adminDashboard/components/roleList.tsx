// src/features/admin/components/RoleList.tsx
import React from 'react';
import { Role } from '@/store/slices/roleSlice';
import { Link } from 'react-router-dom';

interface RoleListProps {
  roles: Role[];
  onDelete: (id: string) => void;
}

const RoleList: React.FC<RoleListProps> = ({ roles, onDelete }) => {
  return (
    <div className="overflow-x-auto">
      <table className="min-w-full bg-white shadow-md rounded">
        <thead>
        <tr>
          <th className="py-2 px-4 border-b">ID</th>
          <th className="py-2 px-4 border-b">Name</th>
          <th className="py-2 px-4 border-b">Permissions</th>
          <th className="py-2 px-4 border-b">Actions</th>
        </tr>
        </thead>
        <tbody>
        {roles.map((role) => (
          <tr key={role.id}>
            <td className="py-2 px-4 border-b">{role.id}</td>
            <td className="py-2 px-4 border-b">{role.name}</td>
            <td className="py-2 px-4 border-b">{role.permissions.join(', ')}</td>
            <td className="py-2 px-4 border-b">
              {/* Edit Button - You can implement Edit functionality as needed */}
              <Link to={`/admin/roles/edit/${role.id}`} className="text-blue-500 hover:underline mr-2">
                Edit
              </Link>
              <button onClick={() => onDelete(role.id)} className="text-red-500 hover:underline">
                Delete
              </button>
            </td>
          </tr>
        ))}
        </tbody>
      </table>
    </div>
  );
};

export default RoleList;