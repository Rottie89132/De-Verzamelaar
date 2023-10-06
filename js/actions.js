const DeleteFiles = async (idToDelete) => {
    const response = await fetch(`./server/delete.php?id=${idToDelete}`, {
        method: 'DELETE', headers: { 'Content-Type': 'application/json' }
    }); const data = await response.json()

    if (data.status == 200) {
        location.reload();
    }
}