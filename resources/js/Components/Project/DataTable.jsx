// Import Core Libraries
import { Link } from "@inertiajs/inertia-react";

// Import Bootstrap Components
import Table from "react-bootstrap/Table";

export default function DataTable({ project }) {
    return (
        <div className="card-body">
            <div className="table-responsive">
                <Link
                    href={route("project.create")}
                    as="button"
                    className="btn btn-success mb-3"
                >
                    {transData("page.project.add")}
                </Link>
                <Table className="table align-items-center" responsive>
                    <thead>
                        <tr className="text-center">
                            <th>{transData("table.project.index")}</th>
                            <th>{transData("table.project.title")}</th>
                            <th>{transData("table.project.description")}</th>
                            <th>{transData("table.project.image")}</th>
                            <th>{transData("table.project.action")}</th>
                        </tr>
                    </thead>
                    <tbody>
                        {project && project.length > 0 ? (
                            project.map((data, index) => {
                                return (
                                    <tr key={index} className="text-center">
                                        <td>{data.id}</td>
                                        <td>{data.title}</td>
                                        <td>
                                            {data.description.length < 50
                                                ? data.description
                                                : data.description.substring(
                                                      0,
                                                      32
                                                  ) + "..."}
                                        </td>
                                        <td>
                                            {data.image ? (
                                                <img
                                                    src={
                                                        "/storage/image/" +
                                                        data.image
                                                    }
                                                    alt={data.title}
                                                    width={100}
                                                />
                                            ) : (
                                                <img
                                                    src={
                                                        "/image/projects/project-1.jpg"
                                                    }
                                                    alt={data.title}
                                                    width={100}
                                                />
                                            )}
                                        </td>
                                        <td>
                                            <Link
                                                href={route(
                                                    "project.edit",
                                                    data.id
                                                )}
                                                as="button"
                                            >
                                                {transData(
                                                    "table.project.edit"
                                                )}
                                            </Link>
                                            <span> | </span>
                                            <Link
                                                href={route(
                                                    "project.show",
                                                    data.id
                                                )}
                                                as="button"
                                            >
                                                {transData(
                                                    "table.project.show"
                                                )}
                                            </Link>
                                            <span> | </span>
                                            <Link
                                                href={route(
                                                    "project.destroy",
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
                                                {transData(
                                                    "table.project.delete"
                                                )}
                                            </Link>
                                        </td>
                                    </tr>
                                );
                            })
                        ) : (
                            <tr>
                                <td colSpan="5" className="text-center">
                                    {transData("table.project.empty")}
                                </td>
                            </tr>
                        )}
                    </tbody>
                </Table>
            </div>
        </div>
    );
}
