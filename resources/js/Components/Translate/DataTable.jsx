import { Link } from "@inertiajs/inertia-react";
import Button from "react-bootstrap/Button";

export default function DataTable({ translate }) {
    return (
        <div className="card-body">
            <div className="table-responsive">
                <Button
                    href={route("translate.create")}
                    variant="success"
                    className="mb-3"
                >
                    Tambah Translate
                </Button>
                <table className="table align-items-center">
                    <thead>
                        <tr className="text-center">
                            <th>Index</th>
                            <th>Group</th>
                            <th>Key</th>
                            <th>Lang ID</th>
                            <th>Lang EN</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        {translate && translate.length > 0 ? (
                            translate.map((data, index) => {
                                return (
                                    <tr key={index} className="text-center">
                                        <td>{data.id}</td>
                                        <td>{data.group}</td>
                                        <td>{data.key}</td>
                                        <td>{data.text.id}</td>
                                        <td>{data.text.en}</td>
                                        <td>
                                            <Link
                                                href={route(
                                                    "translate.edit",
                                                    data.id
                                                )}
                                                as="button"
                                            >
                                                Edit
                                            </Link>
                                            <span> | </span>
                                            <Link
                                                href={route(
                                                    "translate.destroy",
                                                    data.id
                                                )}
                                                method="delete"
                                                as="button"
                                                onClick={(e) => {
                                                    if (
                                                        confirm(
                                                            "Apakah kamu yakin mau menghapus data ini? \n\nData akan terhapus secara permanen"
                                                        ) == true
                                                    ) {
                                                        return;
                                                    } else {
                                                        e.preventDefault();
                                                    }
                                                }}
                                            >
                                                Delete
                                            </Link>
                                        </td>
                                    </tr>
                                );
                            })
                        ) : (
                            <tr>
                                <td colSpan="5" className="text-center">
                                    Belum ada data yang tersedia
                                </td>
                            </tr>
                        )}
                    </tbody>
                </table>
            </div>
        </div>
    );
}
